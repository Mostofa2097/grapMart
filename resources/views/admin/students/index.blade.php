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
                     <div class="card-header">{{__('All class')}}</div>
                     
                     <div class="card-body">
                        <a href="" class="btn btn-sm btn-primary" style="float:right">Add new</a>
                        <table class="table table-responsive table-strio">
                            <thead>
                                <tr>
                                    <td>Sl</td>
                                    <td>Name</td>
                                    <td>roll</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Address</td>
                                    <td>Image</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $key => $row)
                                    
                              
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$row->name}} </td>
                                    <td>{{$row->roll}} </td>
                                    <td>{{$row->email}} </td>
                                    <td>{{$row->phone}} </td>
                                    <td>{{$row->address}} </td>
                                    <td>{{$row->image}} </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-info">edit</a>
                                        <a href="" class="btn btn-sm btn-danger">delete</a>
                                    </td>
                                </tr>
                                  @endforeach
                            </tbody>

                        </table>

                     </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>