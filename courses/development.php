<?php
session_start();

include('connection.php');
include('functions.php');

$user_data= check_login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    
    <title>Development Courses</title>

</head>


<body>

<header class="courseheader">
<div >
        <nav>
            <a href="#"><img src="css/logo.jpg" alt="Technical Logo" class="logo"></a>
            <ul class="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <?php  if(!$user_data) {?>
                <li><a href="user.php">Sign Up / Login</a></li>
                <?php } ?>
                <script>
                    if($user_data){
                </script>
                        <li> Welcome, <?php echo $user_data['user_name'] ?> </li>
                        <li class="logout"><a href="logout.php">Logout</a></li>
                <script>}</script>
                    
            </ul>
        </nav>

    </div>
    <div class="headerBox" >
        <h1 style="font-size: 70px; font-weight: 300%; margin-top:-5%;">
        <br><img src="css/udemy.png" alt="udemy" width="150px" height="150px" style="border-radius: 50%;   margin-left:100px;">
        Paid Courses</h1><br>
        <h2 style="font-size: 30px; font-weight: 300%; ">- Learning Made Accessable</h2> <br><br>
        <div>
            <a href="#" class="btn btn-full"> ACCESS COURSES</a>
        </div>
    </div>


</header>


