<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
   
   <h1>
      about page
   </h1>
   <ul>
       <li class="list-item"><a href="{{ url('gju grfuy')}}">about</a></li>
       <li class="list-item"><a href="{{ url('contact')}}">contact </a></li>
       <li class="list-item"><a href="{{ url('/')}}">back </a></li>
    </ul>
    <p> hye {{Auth::id()}}</p>
   
   <a href="{{route('class.index')}}" class="btn btn-info btn-sm">classes</a>
   <a href="{{route('students.index')}}" class="btn btn-info btn-sm">students</a>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>




