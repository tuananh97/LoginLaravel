<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form action="{{url('login')}}" method="POST" role="form">
    <legend>Form title</legend>
     @if($errors->has('errorlogin'))
     <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{$errors->first('errorlogin')}}
    </div>
    @endif
    
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
        @if($errors->has('email'))
        <p style="color: red"> {{$errors->first('email')}} </p>
        @endif
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
         @if($errors->has('password'))
        <p style="color: red">{{$errors->first('password')}}</p>
        @endif
    </div>
    {!! csrf_field() !!}
    <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        
</div>
  

</body>
</html>