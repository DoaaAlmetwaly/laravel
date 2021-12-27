<!DOCTYPE html>

<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <h2>Register</h2>
  <form  action="{{ url('/Users/Store') }}" method="post">

  @csrf


  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name" value="{{ old('name') }}">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"  name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">

    <div class="form-group">
    <label for="exampleInputName">Address</label>
    <input type="text" class="form-control" id="exampleInputName"  name="address" aria-describedby="" placeholder="Enter address"value="{{ old('address') }}">
  </div>
  </div>

  <div class="form-group">
    <label for="basic-url">linkedin url </label>
    <input type="text"   class="form-control" id="basic-url" name="url" aria-describedby="" placeholder="Enter linked in url" value="{{ old('url') }}">
  </div>
  </div>
    <div class="radio" value="{{ old('radio') }}">
        <label><input name="gander" type="radio" value="male">male </label>
        <label><input name="gander" type="radio" value="female">female</label>
    </div>


  <button type="submit" class="btn btn-primary" style="margin-left: 76px;">Submit</button>

</form>
</div>

</body>
</html>
