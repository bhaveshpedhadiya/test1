
<html>
<head>
<title>Product </title>

</head>
<body>
<p><a href="{{url('products/create')}}">Addproduct</a><p>

    <table border='2px'>
      
        <tr>
            <td>name</td>
            <td>Price</td>
            <td>upc</td>
            <td>image</td>
            <td>status</td>
            <td>Action</td>


        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product['name']}}</td>
            <td>{{$product['price']}}</td>
            <td>{{$product['upc']}}</td>
            <td><img src="{{url('images/',$product['image'])}}" height="100px" width="100px"></td>
            <td>
                @if($product['status']==1)
                <p>Active</p>
                @else
                <p>DeActive</p>
                @endif    
            </td>
            <td><a href="{{route('products.edit',$product->id)}}">Edit</a>
               <form action="{{route('products.destroy',$product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>    
            </form>
        </td>

            
        </tr>
        @endforeach
        
    </table>



</body>
</html>





