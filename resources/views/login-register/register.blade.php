<html>
<head>
<title>Register </title>

</head>
<body>
    <table>
        <form action="{{url('registerpost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>name</td>
                <td><input type="text" name="name" ></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" ></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password" ></td>
            </tr>
            <tr>
            
                <td><button type="submit" >Register</button></td>
                <td>Alreay Register?<a href="{{url('login')}}">login<a></td>

            </tr>
        </form>
    </table>
</body>
</html>





