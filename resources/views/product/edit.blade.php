<html>
<head>
<title>Product </title>

</head>
<body>
    <table>
        <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="{{$product->name}}"></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" value="{{$product->price}}" ></td>
        </tr>
        <tr>
            <td>UPC</td>
            <td><input type="text" name="upc" value="{{$product->upc}}"></td>
        </tr>
        <tr>
            <td>status</td>
            <td>
                <select name="status">
                    <option value="1" {{$product->status ==1 ?'selected':''}}>Active  </option>
                    <option value="0"  {{($product->status ==0 )?'selected':''}}>Deactive  </option>
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





