<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Mail;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
class TestUserController extends Controller
{
    public function login()
    {
        return view('login-register.login');
    }
    public function register()
    {
        return view('login-register.register');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=>'bail|required',
            'password'=>'bail|required|min:6'
        ]);
        $user=([
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        if($user)
        {
             if(Auth::attempt($user))
             {
                 return redirect('dashboard');
             }
             else{
                 return 'email and  password does not match';
                // return redirect()->back()->with('error','email and  password does not match');
             }

        }else{
            return 'user not found';
            // return redirect()->back()->with('error','user not found');
        }


    }
    public function registerPost(Request $request)
    {
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        User::create($data);
        return redirect('login');
    }

    public function index()
    {
        return view('dashboard');
    }
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect('/login');
        }
    }
    public function forgotPassword()
    {
        return view('login-register.forgotpassword');
    }
    public function forgotPasswordPost(Request $request)
    {
       $request->validate([
           'email'=>'bail|required|exists:users'
       ]);
       $token=Str::random(64);
       DB::table('password_resets')->insert([
           'email'=>$request->email,
           'token'=>$token,
           'created_at'=>Carbon::now()
       ]);
       return 'password link send your email';
    }
}
