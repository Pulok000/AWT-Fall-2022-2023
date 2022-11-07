<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    <h1>Registration</h1>
    


<form action="/registration" method="post">
    {{csrf_field()}}
    <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Enter Your name" value="{{old('name')}}"><br>

  @if ($errors->has('name'))
  <span>
    <strong>{{ $errors->first('name') }}</strong>
  </span>
  @endif <br>

  <label for="Email">Email:</label><br>
  <input type="text" id="email" name="email" placeholder="Enter your e-mail" value="{{old('email')}}"><br>

  @if ($errors->has('email'))
  <span>
    <strong>{{ $errors->first('email') }}</strong>
  </span>
  @endif <br>


  <input type="submit" value="Submit">
</form> 

</body>
</html>