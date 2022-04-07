<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1> Add product </h1>
    <form method="post" action="/addproduct" enctype="multipart/form-data">
        @csrf
        <label>Product Name</label>
        <input type="text"  name="product_name"><br><br>
        <label >Category</label>
        <select name="category_id" id="cars">
            @foreach ( $category as $categories )
            <option value={{$categories->id}}>{{$categories->category_name}}</option> 
            @endforeach
           

        </select>
        <br><br>
        <label> Image</label>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
    <a href="/listproduct"> List product</a>
</body>

</html>
