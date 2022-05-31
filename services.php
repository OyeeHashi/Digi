
<?php
session_start();

include('connection.php');
include('functions.php');

 $user_data= check_login($con);
 $sql= "SELECT * FROM `services` "  ;
 $result= mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <meta content="width=device-width, initial-scale=1" name="viewport" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f9c462df9b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/media-queries.css">

</head>
<header id='back'> 
    <div >
        <nav>
            <a href="#"><img src="css/logo.jpg" alt="Technical Logo" class="logo"></a>
          
            <ul class="nav">
                <li><a style="color:white;" href="index.php">Home</a></li>
                <?php  if($user_data) {?> 
                <li><a style="color:white;" href="courses.php">Courses</a></li>
                <?php } ?>
                <li><a style="color:white;" href="#about">About</a></li>
                <li><a style="color:white;" href="#contact">Contact Us</a></li>
                <?php  if(!$user_data) {?>
                <li><a style="color:white;" href="user.php">Sign Up / Login</a></li>
                <?php } ?>
                <?php  if($user_data) {?> 
                <li ><img style="border-radius: 50%; background-color:white; margin-top:-30%" src="img/user.svg" alt="user" width="40px" height="40px"></li>
                <li id='user' style=" margin-left: 20px;font-weight:1000; color:white">| <?php echo $user_data['user_name']?> </li>
                <li><a style="margin-top:-17%; color:white;" href="logout.php" class="btn btn-full"> Logout</a></li> 
                <?php } ?>
                    
            </ul>
            
        </nav>

    </div>
    <div class="headerBox" >
        <h1 style="margin-left:300px; color:whitesmoke">Laptop Repair</h1><br>
        <!-- <h2 >All Solutions Available</h2> <br><br>
        <div>
            <a href="courses.php" class="btn btn-full"> ACCESS SOLUTIONS</a>
        </div> -->
        
    </header>
</div>
<div id='line'>
                    
                    </div>
    


                    <br><br>
        <div class="row">
                    <h1 style="color: black"> <?php echo $row['Heading']?></h1>
                    <div>
                    <br><br>
                    <img style="border-radius: 15px; width: 80%" src="<?php echo $row['img']?>"></img>
                </div>
                    <div>
                    <br><br>
                    <img src="<?php echo $row['image']?>"></img>
                </div>
                <br><br>
                <div style="color: black; text-align:left; font-weight: 700%; font: 20px;">
                    <br><br>
                    <br><br>

                    <?php echo $row['description']?>
                </div>
                



        </div>
                
<body>
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
        
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/query.js"></script>


        </body>



        </html>

