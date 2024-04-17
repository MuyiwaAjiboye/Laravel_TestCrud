<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create form</h1>

    <form action="{{route('product.newproduct')}}" method="post">
    @csrf
    @method('post')
    <label for="">Name</label>
    <input type="text" name="name" placeholder = "name">

    <label for="">Quantity</label>
    <input type="text" name="qty" placeholder = "qty">

    <label for="">Description</label>
    <input type="text" name="discription" placeholder = "discription">

    <input type="submit" value="Save New Product">

`   </form>



</body>
</html>