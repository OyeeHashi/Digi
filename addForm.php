
<?php
session_start();

include('connection.php');
include('functions.php');

$user_data= check_login($con);

if(isset($_POST['request'])){

$ins_name=  $_POST['ins_name'];
$course_name= $_POST['course_name'];
$Category= $_POST['category'];
$link=  $_POST['link'];

$sql= "INSERT INTO requests (ins_name, course_name, Category, Link) VALUES ('$ins_name', '$course_name', '$Category', '$link') " ;


$result= mysqli_query($con,$sql);
// $row=mysqli_fetch_assoc($result);
if($result){
    header('location: courses.php');
}else
die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-1.css" />
    <title>Request Course</title>
</head>

<body>
    <div class="container sign-up-mode addform">
        <div class="forms-container">
            <div class="signin-signup">

                <form method="post" action="#" class="sign-up-form">
                <br><br><br>    
                <h2 class="title">Request Course</h2>
                    <div class="input-fieldd">
                        <br>
                        <input type="text" placeholder="Instructor Name" name="ins_name" />
                    </div>
                    <div class="input-fieldd">
                        <br>
                        <input type="text" placeholder="Course Name" name="course_name" />
                    </div>
                    <div class="input-fieldd">
                        <br>
                        <input type="text" placeholder="Category" name="category" />
                    </div>
                    <div class="input-fieldd">
                        <br>
                        <input type="text" placeholder="Course Link" name="link" />
                    </div>
                    
                    <input type="submit" class="btn" value="Request " name="request" />
                    

                </form>
            </div>
        </div>


    </div>


</body>

</html>