<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a 
    href="{{ url('user/add')}}"
    class="btn btn-primary">Add User</a>
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <td>#</td>
            <td>Name</td>
            <td>User Status</td>
            <td>Mobile</td>
            <td>Email</td>
            <td>User Type</td>
            <td>Action</td>
        </thead>
        <tbody>
      @foreach($users as $key =>$user)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$user->first_name}} {{$user->last_name}}</td>
            <td>{{$user->user_status}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>
                <a
                href="{{url('/user/delete/'.$user->id)}}" 
                style="padding-top: 5px;" class="badge rounded-pill btn btn-danger" ><span>Delete</span></a>          
               
                <a
                href="{{ url('/user/edit/'.$user->id)}}"
                style="padding-top: 5px;" class="badge rounded-pill btn btn-success"  ><span>Edit</span></a>

            </td></tr>
        @endforeach
        </tbody></table>
</body>
</html>