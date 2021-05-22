<?php
include('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
    hr {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }

    .card {
        border-radius: 0px;
        padding-bottom: 5px;
    }

    .form-control,
    .btn {
        border-radius: 0px;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        box-shadow: none;
    }
    </style>
</head>

<body>
    <?php include('header.php');?>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>REGISTER</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/user_register.php" method="post" enctype="multipart/form-data">

                                <input class="form-control" type="text" placeholder="Name" name="user_name"
                                    required><br>

                                <input class="form-control" type="text" placeholder="E-mail" name="user_email"
                                    required><br>

                                <input class="form-control" type="text" placeholder="Contact Number"
                                    name="user_contactno" required><br>

                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender"
                                            value="male">Male
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender"
                                            value="female">Female
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender"
                                            value="other">Other
                                    </div>
                                </div>
                                <input class="form-control" type="text" name="user_address" placeholder="Address"
                                    required><br>
                                <input class="form-control" type="text" name="user_vehicleno" placeholder="Vehicle No."
                                    required><br>

                                <input class="form-control" type="password" name="user_password" placeholder="Password"
                                    required><br>

                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
</body>

</html>