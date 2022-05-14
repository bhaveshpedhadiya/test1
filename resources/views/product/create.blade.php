<html>
<head>
<title>Product </title>

</head>
<body>
    <table>
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" ></td>
                </tr>
                <tr>
                    <td>price</td>
                    <td><input type="text" name="price" ></td>
                </tr>
                <tr>
                    <td>UPC</td>
                    <td><input type="text" name="upc" ></td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>
                        <select name="status">
                            <option value="1">Active  </option>
                            <option value="0">Deactive  </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>image</td>
                    <td><input type="file" name="image" ></td>
                </tr>
                <tr>
                
                    <td><button type="submit" >submit</button></td>
                </tr>
         </form>
    </table>
</body>
</html>





