
<?php
session_start();

include('connection.php');
include('functions.php');

$user_data= check_login($con);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta content="width=device-width, initial-scale=1" name="viewport" /> -->
    <script src="https://kit.fontawesome.com/f9c462df9b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Digi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/media-queries.css">

</head>
<header >
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
        <h1>Digi Softwares</h1><br>
        <h2>All Solutions Available</h2> <br><br>
        <div>
            <a href="#" class="btn btn-full"> ACCESS SOLUTIONS</a>
        </div>
    </div>

</header>

<body>
    <section class="about" id="about">
        <div class="row">
            <div class="col span_1_of_2 about-sec">
                <h2 class="about-heading">Digital Software For Your Growing</h2>
                <p class="about-para">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae v
                    elit itaque doloremque quaerat fuga alias sapiente amet est dolore dolor necessitatibus doloribus
                    sit dolores.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti, ratione harum inventore aliquam
                    commodi quae.
                </p>
                <a href="#" class="btn btn-ghost">Read More</a>
            </div>

            <div class="row col span_1_of_2 " style="text-align:right ;">

                <img src="css/about.jpg!d" alt="About" class="about-img">
            </div>
        </div>



    </section>
    <section class="work">
        <h2 class="sec-heading">WORK</h2>
        <h3 class="sec-sub-heading">Completed Projects</h3>
        <ul class="work-portfolio">
            <div class="col span_1_of_4">
            <li><img src="css/cus-1.jpg" alt="portfolio"></li>
            </div>
            <div class="col span_1_of_4">
            <li><img src="css/cus-2.jpg" alt="portfolio"></li>
            </div>
            <div class="col span_1_of_4">
            <li><img src="css/cus-3.jpg" alt="portfolio"></li>
            </div>
            <div class="col span_1_of_4">
            <li><img src="css/cus-4.jpg" alt="portfolio"></li>
            </div>
            
            <div class="clear-fix"></div>
        </ul>
    </section>
    
    <section class="services">
        <div class="row">
            <h2 class="sec-heading">Services</h2>
            <h3 class="sec-sub-heading">Authentic Work</h3>
        </div>

        <div class="row serv">

            <div class="col span_1_of_5 check" style="background-color: white;"><img src="css/laptop.svg" alt="key"
                    width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div><a href="#" target="_blank" class="readmore">READ MORE</a></div>
            </div>
            <div class="col span_1_of_5 check" style="background-color: white;"><img src="css/curve.svg" alt="key"
                    width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div><a href="#" target="_blank" class="readmore">READ MORE</a></div>
            </div>
            <div class="col span_1_of_5 check" style="background-color: white;"><img src="css/bug.svg" alt="key"
                    width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div><a href="#" target="_blank" class="readmore">READ MORE</a></div>
            </div>
            <div class="col span_1_of_5 check" style="background-color: white;"><img src="css/ungroup.svg" alt="key"
                    width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div><a href="#" target="_blank" class="readmore">READ MORE</a></div>
            </div>
            <div class="col span_1_of_5 check" style="background-color: white; margin-top: 0;"><img
                    src="css/keyboard-solid.svg" alt="key" width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div><a href="#" target="_blank" class="readmore">READ MORE</a></div>
            </div>


        </div>


    </section>

    <section class="partner">

        <div class="row feat">
            <h2 class="sec-heading">Featured Clients</h2>
            <h3 class="sec-sub-heading">Collabed With World's Top Companies</h3>
        </div>
        <div class="row">
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-1.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-2.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-3.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-4.jpg" alt="Brand">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-5.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-6.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-7.jpg" alt="Brand">
                </div>
            </div>
            <div class="col span_1_of_4">
                <div>
                    <img class="partner-logo" src="css/logo-8.jpg" alt="Brand">
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">

        <div class="row">
            <h2 class="sec-heading" style="color: white;">Testimonials</h2>
            <h3 class="sec-sub-heading" style="color: white;">Our Happy Customers!</h3>
        </div>

        <div class="row test">
            <div class="col span_1_of_3 test-box">
                <blockquote class="quote">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis totam,commodi
                    optio officiis laborum, quae voluptatu.
                </blockquote>
                <cite class="cite"> <img src="css/cust-1.jpg" alt="customer"> Husnain Jabbar </cite>
            </div>
            <div class="col span_1_of_3 test-box">
                <blockquote class="quote">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis totam,commodi
                    optio officiis laborum, quae voluptatu.
                </blockquote>
                <cite class="cite"> <img src="css/cust-2.jpg" alt="customer"> Ahmad Mushtaq </cite>
            </div>
            <div class="col span_1_of_3 test-box">
                <blockquote class="quote">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perferendis
                    totam,commodi optio officiis laborum, quae voluptatu.
                </blockquote>
                <cite class="cite"> <img src="css/cust-3.jpg" alt="customer"> Juice Peelo Pagal!
                </cite>
            </div>

        </div>



        </div>

        </div>



    </section>

    <section class="packages">
        <div class="row">
            <h3 class="sec-sub-heading"> Check Out Our Popular Packages </h3>
        </div>

        <div class="row">
            <div class="col span_1_of_3 box">
                <div class="package-box">
                    <h4 class="p-head">Starter</h4>
                    <p class="Package-Price">$69 <span>3 Months</span></p>
                    <p class="package-para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eligendi explicabo magnam repellendus nobis natus fugit vel amet.
                    </p>
                </div>
                <div>
                    <ul class="list">
                        <li class="list-item"><i class="fa-solid fa-check"></i>SEO</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Blogs</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Bugs</li>
                    </ul>
                </div>
                <div>
                    <a href="#" alt="Sign Up" class="btn btn-full"> Sign Up Now </a>
                </div>

            </div>

            <div class="col span_1_of_3 box">
                <div class="package-box">
                    <h4 class="p-head">Starter</h4>
                    <p class="Package-Price">$69 <span>3 Months</span></p>
                    <p class="package-para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eligendi explicabo magnam repellendus nobis natus fugit vel amet.
                    </p>
                </div>
                <div>
                    <ul class="list">
                        <li class="list-item"><i class="fa-solid fa-check"></i>SEO</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Blogs</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Bugs</li>
                    </ul>
                </div>
                <div>
                    <a href="#" alt="Sign Up" class="btn btn-full"> Sign Up Now </a>
                </div>

            </div>
            <div class="col span_1_of_3 box">
                <div class="package-box">
                    <h4 class="p-head">Starter</h4>
                    <p class="Package-Price">$69 <span>3 Months</span></p>
                    <p class="package-para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eligendi explicabo magnam repellendus nobis natus fugit vel amet.
                    </p>
                </div>
                <div>
                    <ul class="list">
                        <li class="list-item"><i class="fa-solid fa-check"></i>SEO</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Blogs</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Bugs</li>
                    </ul>
                </div>
                <div>
                    <a href="#" alt="Sign Up" class="btn btn-full"> Sign Up Now </a>
                </div>

            </div>
        </div>
    </section>

    <section class="contact">
        <div class="row">









        </div>
    </section>




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
        <script>var scroll = new SmoothScroll('a[href*="#"]');</script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/jquery.js"></script>
</body>



</html>