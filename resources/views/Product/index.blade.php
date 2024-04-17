<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>Index</div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>edit</th>
        </tr>

        @foreach($product as $produc)
        <tr>
            <td>{{$produc -> id}}</td>
            <td>{{$produc -> name}}</td>
            <td>{{$produc -> qty}}</td>
            <td>{{$produc -> discription}}</td>
            <td><a href="{{route('product.edit', ['product'=>$produc])}}"> <input type="button" value="Edit"></a></td>

            <td><form action="{{route('product.delete', ['product'=>$produc])}}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Delete">
            </form></td>

        </tr>


        @endforeach
    </table>


</body>
</html>