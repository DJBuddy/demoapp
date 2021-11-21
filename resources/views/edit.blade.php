<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">Register Form</h2>
            <br />
            <form action="updateuser/{{$user->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div>
                            <label for="">Name</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                value="{{$user->name}}"
                                name="name"
                            
                                
                            />
                        </div>
                        <div>
                            <label for="">Address</label
                            ><span class="text-danger">*</span>
                            <textarea class="form-control" name="address" rows="4" id="address">{{$user->address}}</textarea>
                        </div>
                        <div>
                            <label for="">Email</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Email"
                                value="{{$user->email}}"
                                name="email"
                            />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="">Phone</label
                            ><span class="text-danger">*</span>
                            <input
                                type="number"
                                class="form-control"
                                placeholder="Enter phone"
                                value="{{$user->phone}}"
                                name="phone"
                            />
                        </div>
                        <div>
                            <label for="">City</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter City"
                                value="{{$user->city}}"
                                name="city"
                            />
                        </div>
                        <div>
                            <label for="">Designation</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{$user->designation}}"
                                name="name"
                            />
                        </div>
                        <div>
                            <label for="">Password</label>
                            <span class="text-danger">*</span>
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Enter Password"
                                name="designation"
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Profile Image</label><br />
                        <img
                            src="{{ asset('ProfileImage/'.$user->profile_img) }}"
                            alt=""
                            height="150px"
                            width="150px"
                           
                        />
                        <br />
                        <input type="file" name="profile_image" >
                    </div>
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
