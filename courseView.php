<?php
session_start();

include('connection.php');
include('functions.php');

$user_data = check_login($con);

$Id = $_GET['devId'];

$sql = "SELECT * FROM `sheet1` WHERE id = $Id ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


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
    <style>
        body {
            width: 100%;
            overflow-x: hidden;
            /* overflow-y:hidden; */
        }
    </style>
    <title><?php echo $row['Name'] ?></title>

</head>

<body>

    <header class="courseheader">
        <div>
            <nav>
                <a href="#"><img src="css/logo.jpg" alt="Technical Logo" class="logo"></a>
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <?php if (!$user_data) { ?>
                        <li><a href="user.php">Sign Up / Login</a></li>
                    <?php } ?>
                    <script>
                        if ($user_data) {
                    </script>
                    <li> Welcome, <?php echo $user_data['user_name'] ?> </li>
                    <li class="logout"><a href="logout.php">Logout</a></li>
                    <script>
                        }
                    </script>

                </ul>
            </nav>

        </div>

        <div class="headerBox">

            <h1 style="font-size: 30px; font-weight: 300%; margin-top:40px auto; margin-right: 20%;left: 80px; color:whitesmoke; position: absolute; top:-80px; z-index:0">
                <?php echo $row['Name'] ?></h1>

        </div>


    </header>

    <?php

    $name = $row['Name'];
    $m_cat = $row['Main Category'];
    $s_cat = $row['Sub Category'];
    $s_topic = $row['Sub Topic'];
    $website = $row['Website'];
    $instructor = $row['Instructor'];
    $hours = $row['Hours'];
    $rating = $row['Rating'];
    $Students = $row['Students'];
    $availibility = $row['Availibility'];
    $status = $row['Status'];
    $link = $row['Share Link'];
    $desc = $row['decription'];
    $picpath = $row['picPath'];
    ?>

    <section class=" course " style="margin-bottom: 150%;">

    
    <div class="about-sec " >
    
    <div style="text-align:center ;" >
        <img style="text-align:center; margin: 10px auto" src="css/development.png" alt="development" class="courseimg" width="450px" height="450px">
    </div>
                
                <div>
                    <img style="margin: 10px 20px 80px" src="<?php echo $picpath ?>" alt="Picture">
                </div>
                <div style="margin: 10px 70px 80px">
                    <ul id="alpha">
                        <li>
                            <h2> Name: </h2> <?php echo $name ?>
                        </li>
                        <li>
                            <h2>Major Category: </h2><?php echo $m_cat ?>
                        <li>
                            <h2>Sub Category: </h2><?php echo $s_cat ?>
                        <li>
                            <h2>Sub Topic: </h2><?php echo $s_topic ?>
                        <li>
                            <h2>Website: </h2> <?php echo $website ?>
                        <li>
                            <h2>Instructor: </h2><?php echo $instructor ?>
                        <li>
                            <h2>Hours: </h2><?php echo $hours ?>
                        <li>
                            <h2>Rating: </h2><?php echo $rating ?>
                        <li>
                            <h2>Students Enrolled:</h2> <?php echo $Students ?>
                        <li>
                            <h2>Availibility </h2> <?php echo $availibility ?>
                        <li>
                            <h2>Status </h2> <?php echo $status ?>
                        <li>
                            <h2>Link </h2> 

                    </ul>


                </div>
                
                <a class="btn btn-full" style="text-align:center; margin-left: 40%;margin-top: -10% " href="<?php echo $row["Share Link"]; ?>"> DOWNLOAD COURSE </a>


            </div>



    </section>

</body>

</html>