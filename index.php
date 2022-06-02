
<?php

// Starting a php Connection
session_start();

include('connection.php');
include('functions.php');

 $user_data= check_login($con);

 $sql= "SELECT * FROM `testimonials` "  ;    
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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"> -->
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
<header id='index'>     
    <!-- contains all the header section with height 100vh and input php data -->
    <div >
        <nav>
            <a href="#"><img src="css/logo.jpg" alt="Technical Logo" class="logo"></a>
          
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <?php  if($user_data) {?> 
                <li><a href="courses.php">Courses</a></li>
                <?php } ?>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <?php  if(!$user_data) {?>
                <li><a href="user.php">Sign Up / Login</a></li>
                <?php } ?>
                <?php  if($user_data) {?> 
                <li ><img style="border-radius: 50%; background-color:white; margin-top:-30%" src="img/user.svg" alt="user" width="40px" height="40px"></li>
                <li id='user' style=" margin-left: 20px;font-weight:1000; color:black">| <?php echo $user_data['user_name']?> </li>
                <li><a style="margin-top:-17%;" href="logout.php" class="btn btn-full"> Logout</a></li> 
                <?php } ?>
                    
            </ul>
            
        </nav>

    </div>
    <div class="headerBox" >
        <h1 >Digi Softwares</h1><br>
        <h2 >All Solutions Available</h2> <br><br>
        <div>
            <a href="#" class="btn btn-full"> ACCESS SOLUTIONS</a>
        </div>
    </div>

</header>

<!-- ABout Section -->

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
    
    <section class="services">
        <div class="row">
            <h2 class="sec-heading">Services</h2>
            <h3 class="sec-sub-heading">Authentic Work</h3>
        </div>

        <div class="row serv">

            <div class="col span_1_of_5 check" style="background-color: white;"><img src="css/laptop.svg" alt="key"
                    width="50%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div><a href="services.php" target="_blank" class="readmore">READ MORE</a></div>
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
        <?php  
        if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  

            <div class="col span_1_of_3 test-box">
                <blockquote class="quote">
                    <?php echo $row['review']?>
                </blockquote>
                <cite class="cite"> <img src="<?php echo $row['img']?>" alt="customer"> <?php echo $row['name']?> </cite>
            </div>

            <?php
                               }
        }?>


            <!-- <div class="col span_1_of_3 test-box">
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
            </div> -->

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
                    <h4 class="p-head">Rookie</h4>
                    <p class="Package-Price">$79 <span>3 Months</span></p>
                    <p class="package-para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eligendi explicabo magnam repellendus nobis natus fugit vel amet.
                    </p>
                </div>
                <div>
                    <ul class="list">
                        <li class="list-item"><i class="fa-solid fa-check"></i>SEO</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Blogs</li>
                    
                        <li class="list-item"><i class="fa-solid fa-check"></i>Course</li>
                    </ul>
                </div>
                <div>
                    <a href="#" alt="Sign Up" class="btn btn-full"> Sign Up Now </a>
                </div>

            </div>
            <div class="col span_1_of_3 box">
                <div class="package-box">
                    <h4 class="p-head">Premium</h4>
                    <p class="Package-Price">$99 <span>3 Months</span></p>
                    <p class="package-para">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eligendi explicabo magnam repellendus nobis natus fugit vel amet.
                    </p>
                </div>
                <div>
                    <ul class="list">
                        <li class="list-item"><i class="fa-solid fa-check"></i>SEO</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Blogs</li>
                        <li class="list-item"><i class="fa-solid fa-check"></i>Courses</li>
                    </ul>
                </div>
                <div>
                    <a href="#" alt="Sign Up" class="btn btn-full"> Sign Up Now </a>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
    <br><br><br><br>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="font-weight: 500;">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="font-size: 120%;">We'd Love to Hear From You !</div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div style="margin-left: 270px">
                    <input style="background-color: #ed07b7; color:white" class="btn btn-ghost" type="button" value="Submit" name="submit"/>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-pink-500">bhutto_zinda_hai@nallay.com</a>
          <p class="leading-normal my-5">49 Waris St.
            <br>Qurban, Keraanchi
          </p>
          <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</section> -->



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
        <script>
         $('nav .button').click(function(){
           $('nav .button span').toggleClass("rotate");
         });
           $('nav ul li .first').click(function(){
             $('nav ul li .first span').toggleClass("rotate");
           });
           $('nav ul li .second').click(function(){
             $('nav ul li .second span').toggleClass("rotate");
           });
      </script>
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="js/query.js"></script>


        </body>



        </html>

