<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">Register Form</h2>
            <br />
            <form action="userregistration" method="POST" enctype="multipart/form-data">
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
                                placeholder="Enter Name"
                                name="name"
                                required
                            />
                        </div>
                        <div>
                            <label for="">Address</label
                            ><span class="text-danger">*</span>
                            <textarea class="form-control"name="address" rows="4" required></textarea>
                        </div>
                        <div>
                            <label for="">Email</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter Email"
                                name="email"
                                required
                            />
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="">Phone</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter phone"
                                name="phone"
                                required
                            />
                        </div>
                        <div>
                            <label for="">City</label
                            ><span class="text-danger">*</span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter City"
                                name="city"
                                required
                            />
                        </div>
                        <div>
                            <label for="">Designation</label>
                            <input
                                type="text"
                                class="form-control"
                                name="designation"
                                required
                            />
                        </div>
                        <div>
                            <label for="">Password</label>
                            <span class="text-danger">*</span>
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Enter Password"
                                name="password"
                                required
                            />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Profile Image</label><br />
                        <img
                            src="data:image/png;base64,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"
                            alt=""
                            height="150px"
                            width="150px"
                        />
                        <br />
                        <input type="file" name="profile_image" required>
                    </div>
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
