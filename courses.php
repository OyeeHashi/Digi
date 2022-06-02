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
    
    <title>Udemy Courses</title>

</head>

<body>

<header id='index'>
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
                        <li style=" margin-left: 20px;font-weight:1000; color:black"> Welcome, <?php echo $user_data['user_name'] ?> </li>
                        <li><a style="margin-top:-17%;" href="logout.php" class="btn btn-full"> Logout</a></li> 
                <script>}</script>
                    
            </ul>
        </nav>

    </div>
    <div  style="margin-top:-130px" class="headerBox" >
        <h1 style="font-size: 70px; font-weight: 300%; margin-top:-5%;">
                <br><img src="css/udemy.png" alt="udemy" width="150px" height="150px" style="border-radius: 50%;   margin-left:100px; ">
        Paid Courses</h1><br>
        <h2 style="font-size: 30px; font-weight: 300%; ">- Learning Made Accessable</h2> <br><br>
        <div>
            <a style="font-size:20px" href="#" class="btn btn-full"> ACCESS COURSES</a>
        </div>
    </div>


</header>

<section class="course-1" >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Development </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="development.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">
                <img src="css/development.png" alt="development" class="about-img">
            </div>
        </div>
</section>

<section class="  course-1 " >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Business </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="business.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">
                <img src="css/business.png" alt="business" class="about-img">
            </div>
        </div>
</section>


<section class="  course-1" >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Finance </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="finance.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">
                <img src="css/lifestyle.png" alt="development" class="about-img">
            </div>
        </div>
</section>
<section class="  course-1" >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Office Productivity </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="OfficeProductivity.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">
                <img src="css/psychology.png" alt="development" class="about-img">
            </div>
        </div>
</section>
<section class="course-1" >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Teaching </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="teaching.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">
                <img src="css/teaching.png" alt="development" class="about-img">
            </div>
        </div>
</section>
<section class="  course-1" >
<div class="row">
            <div class="col span_1_of_2 about-sec">
                <h1 class="about-heading" style="font-size: 50px; ">Udemy Courses for Personal Development </h1>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <br><a href="personalDevelopment.php" class="btn btn-ghost ">BROWSE COURSES</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right;">
                <img src="css/lifestyle.png" alt="development" class="about-img">
            </div>
        </div>
</section>

</body>


</html>