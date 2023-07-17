<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="card col-lg-6 ml-4">
     
                     
            
          <div class="cord-body">
            <form action="{{ route('store.contact') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputname" class="form-label">Full Name</label>
                  <input type="taxt" class="form-control @error('name') is-invalid @enderror" name="name" >
                  @error('name')
                     <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email adderss</label>
                    <input type="emai l" class="form-control @error('email') is-invalid @enderror" name="email" >
                    @error('email')
                    <strong class="text-danger">{{ $message }}</strong>
                     @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                  @error('password')
                  <strong class="text-danger">{{ $message }}</strong>              
                  @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>    
          </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>