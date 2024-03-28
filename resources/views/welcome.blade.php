<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f1f1f1;
}

.login-container {
  background-color: #fff;
  padding: 139px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-container h2 {
  margin-bottom: 20px;
  text-align: center;
}

.login-form .form-group {
  margin-bottom: 15px;
}

.login-form label {
  display: block;
  font-weight: bold;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.login-form button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.login-form button:hover {
  background-color: #0056b3;
}

  </style>
</head>
<body>
    <div class="col-sm-8 card position-absolute" style="top:50%;left:50%;transform:translate(-50%,-50%);">
        <div class="card-header">
            <h1>User Login</h1>
        </div>
        <div class="card-body">

        @if(Session::has('error'))
            <p class="alert alert-danger">{{Session::get('error')}}</p>
        @endif


        <form action="{{route('check.login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                @if($errors->get('email'))
                <p class="alert alert-danger">{{$errors->first('email')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                @if($errors->get('password'))
                    <p class="alert alert-danger">{{$errors->first('password')}}</p>
                @endif 
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/user/register')}}" class="float-right">Register</a>
        </form>
        </div>
    </div>
    
</body>
</html>
