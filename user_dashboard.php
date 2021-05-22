<?php
session_start();
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
	header("location:user_login.php");
}
include('include/connect.php');
$user_id=$_SESSION['user_id'];
$sql="SELECT * FROM `users` WHERE user_id=$user_id";
//echo $sql;exit;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <style>
    body {
        background-image: url('images/wal6.jpg');
        position: auto;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .container {
        padding-top: 20px;
    }

    .btn {
        border-radius: 0px;
    }

    .jumbotron {
        border-radius: 0px;
    }
    </style>
</head>

<body>
    <?php
include('header_user.php');
?>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-5">
                <?php 
            echo "WELCOME ";?> <b> <?php
            echo strtoupper ($row['user_name']);
                ?>!</b>
            </h1>

            <p class="lead">List & Rent your Space for Parking.</p>
            <center>
                <hr class="my-4">
                <a class="btn btn-info btn-lg"
                    href="source/selected_datetime.php?user_id=<?php echo $row['user_id']?>&&user_id=<?php echo $user_id;?>"
                    role="button">Search</a>
                <a class="btn btn-primary btn-lg" href="check_booking.php?user_id=<?php echo $row['user_id']?>"
                    role="button">Book</a>
                <a class="btn btn-danger btn-lg"  
                    href="source/selected_datetime.php?user_id=<?php echo $row['user_id']?>" role="button">Cancel</a>
            </center>
        </div>
    </div>
</body>

</html>