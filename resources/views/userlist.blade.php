<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User List</h2>    
  <form method="POST" action="{{ route('logout') }}">
  @csrf
      <button class="btn btn-primary" type="submit">Logout</button>
  </form>   
  <table class="table">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Mo. No.</th>
        <th>City</th>
        <th>Email</th>
        <th>Profile Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <tbody>
        @foreach($users as $user)
           <tr>
               <td>{{$loop->iteration}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->phone}}</td>
               <td>{{$user->city}}</td>
               <td>{{$user->email}}</td>
               <td>  <img src="{{ asset('ProfileImage/'.$user->profile_img) }}" style="width: 140px;height: 100px;" /></td>
               <td>
                 <a class="text-black" href="useredit/{{$user->id}}"><button class="btn btn-success">Edit</button></a>
                 <a href="userdelete/{{$user->id}}">  <button class="btn btn-danger">Delete</button></a>
              </td>
               </tr>
         @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
