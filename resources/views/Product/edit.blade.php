<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Edit form</h1>

<form action="{{route('product.update' , ['product'=> $product])}}" method="post">
@csrf
@method('put')
 


<label for="">Name</label>
<input type="text" name="name" placeholder = "name" value="{{$product -> name}}">

<label for="">Quantity</label>
<input type="text" name="qty" placeholder = "qty" value="{{$product -> qty}}">

<label for="">Description</label>
<input type="text" name="discription" placeholder = "discription" value="{{$product -> discription}}">

<input type="submit" value="Edit Product">

`   </form>
    
</body>
</html>