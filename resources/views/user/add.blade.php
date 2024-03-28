<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="{{ url('/user/store')}}" method="post"  enctype="multipart/form-data" >
        @csrf

        @if($errors->any())
        <span class="text-danger" >{{ $errors->first('user_type') }}</span>
@endif

<div class="col-sm-6">
    <label >First Name</label>
    <div class="form-group">
        <div class="form-line">
            <input type="text" name ="first_name" value="{{old('first_name')}}" class="form-control" placeholder="Enter your First Name">
        </div>
        @if($errors->any())
            <span class="text-danger" >{{ $errors->first('first_name') }}</span>
        @endif
    </div>
    </div>
    <div class="col-sm-6">
        <label>Last Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name ="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Enter your Last Name">
            </div>
            @if($errors->any())
                <span class="text-danger" >{{ $errors->first('last_name') }}</span>
            @endif
        </div>  
    </div>
    <div class="col-sm-6">      
        <label >Mobile</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name ="mobile" value ="{{old('mobile')}}"class="form-control" placeholder="Enter your mobile no">
            </div>
            @if($errors->any())
                <span class="text-danger" >{{ $errors->first('mobile') }}</span>
            @endif
        </div>  
    </div>
    <div class="col-sm-6">
        <label>Email</label>
        <div class="form-group">
            <div class="form-line">
                <input type="email" name ="email" class="form-control" value="{{old('email')}}" placeholder="Enter your Email">
            </div>
            @if($errors->any())
                <span class="text-danger" >{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <label >Password</label>
        <div class="form-group">
            <div class="form-line">
                <input type="password" name="password" class="form-control" placeholder="Enter your Password">
            </div>
            @if($errors->any())
                <span class="text-danger" >{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <label >Confirm Password</label>
        <div class="form-group">
            <div class="form-line">
                <input type="password" name ="confirm_password" class="form-control" placeholder="Enter your Password">
            </div>
            @if($errors->any())
                <span class="text-danger" >{{ $errors->first('confirm_password') }}</span>
            @endif
        </div>
    </div>
    
    <div class="col-sm-12">
        <div Class="form-group ">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
    </form>   
</body>
</html>