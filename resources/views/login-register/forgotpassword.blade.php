<html>
<head>
<title>forgotPassword Request </title>

</head>
<body>
    <table>
        <form action="{{url('forgotpasswordpost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <tr>
                <td>email</td>
                <td><input type="email" name="email" palceholder="enter your  register email"></td>
            </tr>
           
            <tr>
                <td><button type="submit" >send</button></td>   
            </tr>
        </form>
    </table>
</body>
</html>





