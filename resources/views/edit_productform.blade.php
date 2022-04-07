

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1> Update product </h1>
    <form method="post" action="/updateproduct" enctype="multipart/form-data">
        @csrf
     
        <input type="hidden" name="id" value="{{$product[0]['id']}} ">
        <label>Product Name</label>
        <input type="text"  value={{$product[0]['product_name']}} name="product_name"><br><br>
        <label>Category</label>
        <select name="category_id" > 
            @foreach ( $category as $categories )
            <option value="{{$categories->id}}"
                
                @foreach ($product as $products)
                @if($products->category->category_name == $categories->category_name)
                    selected
                @endif
            @endforeach
                
                >{{$categories->category_name}}</option> 
            @endforeach
         
            

        </select>
        <br><br>
        <input type="file" name="image"><br><br>
        <input type="submit" value="Submit">
    </form>
    <a href="/listproduct"> List product</a>
</body>

</html>