<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Catgeory</h1>
    
    <form method="post" action="/addcategory">
            @csrf
        <input type="text"  name="category">
        @if ($errors->any())
       
            @foreach ($errors->get('category') as $message )
              <span style="color: red"> ***{{$message}}*** </span> 
            @endforeach
  
    @endif
    <br> <br>
    
        <input type="submit" value="Submit">
        <a href="/list_category"> View Category</a>
    </form>
</body>
</html>