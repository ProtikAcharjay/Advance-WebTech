@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



    <form action="{{url('/')}}/register" method="post">
        @csrf
            <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                @error('name')
                    {{$message}};
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">ID</label>
              <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                @error('id')
                {{$message}};
            @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                @error('email')
                {{$message}};
            @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <span class="text-danger">
                @error('password')
                {{$message}};
            @enderror
              </span>
            </div>
            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>



  </body>
</html>
@endsection


