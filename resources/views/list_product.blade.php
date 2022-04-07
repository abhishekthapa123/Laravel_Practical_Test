<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="product_form"> <button> Add Product </button></a> <br> <br>
    <table border="1px">
        <tr>
        <th>Product Name</th>
        <th>Category Name</th>
        <th>Image </th>
        <th>Actions</th>
    </tr>
    @foreach ( $product as $products )
      
    <tr>
        <td>{{$products->product_name}}</td>
        <td>{{$products->category->category_name}}</td>
      <td>
          <a href="/edit_productform/{{$products->id}}" ><button> Edit </button></a> &nbsp;
          <a href="/delete_product/{{$products->id}}"><button> Delete </button></a> &nbsp;
      </td>
      <td><img src="{{asset('uploads/images/'.$products->image)}}" ></td>
    </tr>
    @endforeach
    </table>
</body>
</html>