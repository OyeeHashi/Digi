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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            width: 100%;
            overflow-x: hidden;
            /* overflow-y:hidden; */
        }
    </style>
    <title><?php echo $row['Name'] ?></title>

</head>

<body >

    <header class="courseheader">
        <div >
            <nav >
                <a href="#"><img  src="css/logo.jpg" alt="Technical Logo" class="logo" ></a>
                <ul id='akm' class="nav" >
                    <li><a style="font-weight:600;" href="index.php">Home</a></li>
                    <li><a style="font-weight:600;" href="#about">About</a></li>
                    <li><a style="font-weight:600;" href="addForm.php">Request Course</a></li>
                    <?php if (!$user_data) { ?>
                        <li><a href="user.php">Sign Up / Login</a></li>
                    <?php } ?>
                    <script>
                        if ($user_data) {
                    </script>
                    <li style="color: #ed07b7c2; font-weight:600;">| Welcome, <?php echo $user_data['user_name'] ?> </li>
                    <li class="logout"><a style="color: #db4a39; font-weight:700;" href="logout.php">Logout</a></li>
                    <script>
                        }
                    </script>

                </ul>
            </nav>
                        
        </div>

        
      

    </header>
    <div id='line'>
                        
        </div>

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

    <div class="about-sec" >
    <div class="heading">
            <?php
            echo '|&nbsp'.$name;
            ?>
    
    </div>



    <div style="text-align:center ;" >
        <img style="text-align:center; margin: 10px auto; box-shadow: 2px 2px;" src="css/development.png" alt="development" class="courseimg" width="450px" height="450px">
    </div>
                
                <div>
                    <img style="margin: 10px 20px 80px; border: 2px solid whitesmoke ; text-align:center;" src="<?php echo $picpath ?>" alt="Picture" width="80%" height=
                    "80%">
                </div>
                <div style="margin: 10px 70px 80px">
                    <ul id='alpha'>
                        <li>
                            <h2> | Name: </h2> <?php echo $name ?>
                        </li>
                        <li>
                            <h2>| Major Category: </h2><?php echo $m_cat ?>
                        <li>
                            <h2>| Sub Category: </h2><?php echo $s_cat ?>
                        <li>
                            <h2>| Sub Topic: </h2><?php echo $s_topic ?>
                        <li>
                            <h2>| Website: </h2> <?php echo $website ?>
                        <li>
                            <h2>| Instructor: </h2><?php echo $instructor ?>
                        <li>
                            <h2>| Hours: </h2><?php echo $hours ?>
                        <li>
                            <h2>| Rating: </h2><?php echo $rating ?>
                        <li>
                            <h2>| Students Enrolled:</h2> <?php echo $Students ?>
                        <li>
                            <h2>| Availibility </h2> <?php echo $availibility ?>
                        <li>
                            <h2>| Status </h2> <?php echo $status ?>
                        <li>
                            <h2>| Link </h2> 

                    </ul>


                </div>
                
                <a class="btn btn-full" style="text-align:center; margin-left: 40%;margin-top: -10% " href="<?php echo $row["Share Link"]; ?>"> DOWNLOAD COURSE </a>


            </div>



    </section>

</body>
<footer id="contact">
        <div class="row">
            <div class="col span_1_of_2">
                <ul class="footer-list">
                    <li><a class="a" href="#">About Us</a></li>
                    <li><a class="a" href="#">Contact Us</a></li>
                    <li><a class="a" href="#">Help and Support</a></li>
                    <li><a class="a" href="#">IOS</a></li>
                    <li><a class="a" href="#">Android</a></li>
                </ul>
            </div>
    
            <div class="col span_1_of_2 social">
                <ul class="footer-list " style="text-align: right;">
                <li><a class="a" href="#"><i id="f" class="fa-brands fa-facebook"></i></a></li>
                <li><a class="a" href="#"><i id="g" class="fa-brands fa-google-plus-g"></i></a></li>
                <li><a class="a" href="#"><i id="t" class="fa-brands fa-twitter"></i></a></li>
                <li><a class="a" href="#"><i id="i" class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
    
        </div>
        <div class="col span_2_of_2">
            <p class="par">A website project keeping in mind of the HCI concepts for better structure.
                <br><br> © All RIGHTS RESERVED BY Hashii </p>
        </div>
    
        
    </footer>
</html>