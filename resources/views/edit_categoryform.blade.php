<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update Catgeory</h1>
    
    <form method="post" action="/updatecategory">
            @csrf
            <input type="hidden" name="id" value={{$category->id}}>
        <input type="text"  name="category" value={{$category->category_name}}>
        @if ($errors->any())
       
            @foreach ($errors->get('category') as $message )
              <span style="color: red"> ***{{$message}}*** </span> 
            @endforeach
  
    @endif
    <br> <br>
    
        <input type="submit" value="Submit">
    </form>
</body>
</html>