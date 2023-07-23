<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row ">
            <div class="col-md 4">
                <div class="card">
                     <div class="card-header">{{__('All Students')}}
                        <a href="{{route('students.index')}}" class="btn btn-sm btn-primary" style="float:right">all students</a> 
                    </div>
                     <div class="card-body">

                        <form action="{{route('students.store')}}" method="post">
                          @csrf

                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Class Name</label>
                              <select class="form-control" name="class_id" >
                                @foreach ($classes as $row)
                                    <option value="{{$row->id}}"> {{$row->class_name}} </option>
                                @endforeach
                              </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Class Name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">roll</label>
                                <input type="text" name="roll" class="form-control" id="exampleInputEmail1" placeholder="roll">
                            </div>

                           
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Student Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Student Phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Student address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="address">
                            </div>

                            
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        

                        
                     </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>