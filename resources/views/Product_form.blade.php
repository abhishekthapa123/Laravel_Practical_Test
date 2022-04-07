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
    <form method="post" action="/addproduct">
        @csrf
        <label for="cars">Product Name</label>
        <input type="text"  name="product_name"><br><br>
        <label for="cars">Category</label>
        <select name="category_id" id="cars">
            @foreach ( $category as $categories )
            <option value={{$categories->id}}>{{$categories->category_name}}</option> 
            @endforeach
           

        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <a href="/listproduct"> List product</a>
</body>

</html>
