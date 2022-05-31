<?php
session_start();

include('connection.php');
include('functions.php');

$user_data= check_login($con);

$title='Personal Development';

$sql= "SELECT * FROM `sheet1` WHERE `Main Category` = 'Personal Development'"  ;
$result= mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);


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
    
    <title><?php echo $title?> Courses</title>

</head>


<body>

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
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
<section class=" course " >
<div class="row">

            <div class="row col span_1_of_4 " style="text-align:right ;">
                <img src="css/development.png" alt="development" class="courseimg">
            </div>


            <div class="col span_3_of_4 about-sec ">
                <h1 class="courseHead" ><?php echo $row["Name"]; ?> </h1>
                <div class=" coursePara">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    <br><br>
                    <a href="<?php echo $row["Share Link"]; ?>"> DOWNLOAD COURSE </a>
                </div>
                <br><a href="courseView.php?devId=<?php echo $row['id']; ?> " class="btn btn-ghost"> OPEN COURSE</a>
            </div>

        </div>
        <div id='linee'>
                        
                        </div>
        <?php
                               }
        }?>



</section>



</body>

</html>