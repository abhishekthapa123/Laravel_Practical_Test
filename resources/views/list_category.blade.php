<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="category_form"> <button> Add Category </button></a> <br> <br>
    <table border="1px">
        <tr>
        <th>Categories</th>
        <th>Actions</th>
    </tr>
    @foreach ( $category as $categories )
        
  
    <tr>
        <td>{{$categories->category_name}}</td>
        <td> <a href="/edit_category/{{$categories->id}}"><button> Edit </button> </a> &nbsp;
        
            <a href="/delete_category/{{$categories->id}}"><button> Delete </button> </a>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>