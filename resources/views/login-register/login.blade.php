<html>
<head>
<title>Login </title>

</head>
<body>
    <table>
        <form action="{{url('loginpost')}}" method="post" enctype="multipart/form-data">
            @csrf
        
            <tr>
                <td>email</td>
                <td><input type="email" name="email" ></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
                <td><button type="submit" >login</button></td>
                <td><a href="{{url('forgotpassword')}}">ForgotPassword<a>

            </tr>
            <tr>
                <td></td>
                <td>Not Register?<a href="{{url('register')}}">Register<a></td>
                
            </tr>
        </form>
    </table>
</body>
</html>





