<?php
include 'configmain.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fitness Club</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <link href="CSS/home-style.css" type="text/css" rel="Stylesheet" />
  <link href="CSS/animate.css" type="text/css" rel="Stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  
   <style>
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 154.67px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;

    }

    .dropdown .dropbtn {
      cursor: pointer;
      font-size: 12px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown {
      display: none;
    }

    .login {}

    .movetologin {
      background-color: Crimson;
      border-radius: 5px;
      color: white;
      padding: .5em;
      text-decoration: none;
      font-size: 15px;
    }

    .movetologin:hover,
    .movetologin:focus {
      background-color: FireBrick;
      color: White;
      text-decoration: none;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }


    .dropbtn:hover {
      background-color: red;
    }

    .show {
      display: block;
    }
  </style>
  
</head>
<body>
  <!-- Navigation bar in Header section-->
  <section id="hero">
    <header>
      <div class="container">
        <div id="header-logo-mobile" class="top-gym-logo">
          <a href="#">FItness<br/>Club</a>
        </div>
        <nav>
          <ul class="flex">
            <li><a href="home.php">Home</a></li>
            <!--<li><a href="#">About Us</a></li>-->
             <li><a href="fitness-care.php">Fit.care</a></li>
            <li><a href="mind-care.php">Mind.care</a></li>
            <li id="header-logo" class="top-gym-logo">
              <a href="#">Fitness<br/>Club</a>
            </li>
           
            <li><a href="diet-care.php">Diet.care</a></li>
            <li><a href="blog.php">Blog</a></li>
             <li>
              <div class="dropdown" id="dropdown">
                <button class="dropbtn" onclick="myFunction()">Hey <span id="cg"></span>!
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                  <a href="logout.php">Logout</a>
                  <a href="#">About us</a>
                  <!-- <a href="#">Link 3</a> -->
                </div>
              </div>
              <div class="login" id="login">
                <a href="login.php" class="movetologin">Login</a>
              </div>
            </li>
          </ul>
        </nav>

        <button id="hamburger-menu">
          <span class="strip"></span>
          <span class="strip"></span>
          <span class="strip"></span>
        </button>
      </div>
    </header>
 <!-- Image slider in navigation bar   -->

    <div id="hero-slider">
      <div class="hero-slide-item" style="background-image:url(Images/Header-image-1.jpeg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Top Gym</h2>
          <button>More Info</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(Images/Header-image-2.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Top Trainer</h2>
          <button>More Info</button>
        </div>
      </div>

      <div class="hero-slide-item" style="background-image:url(Images/Header-image-3.jpg);">
        <div class="hero-slider-marketing">
          <a href="#" class="youtube-button"><span class="fa fa-play"></span></a>
          <h2>Be Fit. Top Body</h2>
          <button>More Info</button>
        </div>
      </div>
    </div>
  </section>
  <!-- End of header Section -->

<!-- Starting of Features Section -->
  <section id="features">
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-1.jpg" alt="Exercise Class" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-1.png" alt="Star Trophy Icon" />
          </div>
          <h4>Amazing Setting</h4>
          <p>Amazing setup with best plans and different pack we are providing different types of services. We are providing all the general and 
            best information regrading basics health and fitness at one platform.</p>
        </div>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/feature-2.jpg" alt="Man doing dumbbell rows" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-2.png" alt="Dumbbell Icon" />
          </div>
          <h4>Best Experts</h4>
          <p>We believe everyone is best and everyone deserve best in their life. We've tire-up with best nutritions, trainers and doctors.</p>
        </div>
      </div>

      <div class="box">
        <img src=Images/Salad-diet.jpg  alt="salad-diet" />
        <div class="feature-info-container">
          <div class="icon">
            <img src="https://onclickwebdesign.com/wp-content/uploads/icon-3.png" alt="Smoothie Icon" />
          </div>
          <h4>Diet Plans</h4>
          <p>In our web-site you will all basic information of all factors which plays a vital role in diet like carbohydrates, protein, calories,
            fats, water level and vitamins etc.</p>
        </div>
      </div>
    </div>
  </section>
<!-- End of Features section -->

<!-- Start of services section -->
  <section id="services">
    <h3>Services</h3>
    <div class="flex container">
      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-1.png" alt="Basketball Icon" />
        <h4>Health</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-2.png" alt="Bench Press Icon" />
        <h4>Excercise</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-3.png" alt="Stopwatch Icon" />
        <h4>Yoga</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>

      <div class="box">
        <img src="https://onclickwebdesign.com/wp-content/uploads/services-icon-4.png" alt="Mp3 Player Icon" />
        <h4>blog</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
      </div>
    </div>

    <button> All Services</button>
  </section>
  <!-- End of services sextion -->
<!--
<section id="schedule-services">
    <div class="flex container">
      <div class="upcoming-classes-box">
        <strong>NEXT</strong>
        <h4>Upcoming Classes</h4>
        <table>
          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Gym Fitness</td>
            <td>11:00 - 12:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Pilates</td>
            <td>12:00 - 1:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Spinning</td>
            <td>1:00 - 2:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Yoga</td>
            <td>2:00 - 3:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Zumba</td>
            <td>3:00 - 4:00</td>
          </tr>

          <tr>
            <td><img src="https://onclickwebdesign.com/wp-content/uploads/stopwatch.png" alt="Stopwatch" /></td>
            <td>Cardio Kickbox</td>
            <td>4:00 - 5:00</td>
          </tr>
        </table>
      </div>

      <div class="membership-cards-box">
        <div class="inner-container">
          <strong>NEXT</strong>
          <h4>Membership Deals</h4>
          <h2>25% <span>Discount</span></h2>
        </div>
      </div>

      <div class="personal-trainer-box">
        <strong>BECOME A</strong>
        <h4>Personal Trainer</h4>
        <p>Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.Pellentesque dictum nisl in nibh dictum volutpat nec a quam. Vivamus suscipit nisl quis nulla pretium.</p>
        <button>Sign Up Now</button>
      </div>
    </div>
  </section>
-->
  

  <footer>
    <div class="footer-container">
      <div id="footer-logo" class="top-gym-logo">
        <a href="#">Fitness<br/>Club</a>
      </div>

      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="mind-care.php">Mind.care</a></li>
          <li><a href="fitness-care.php">Fit.care</a></li>
          <li><a href="diet-care.php">Diet.care</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </nav>

      <div class="mailing-list">
        <form action="signup.php" method="post">
        <input type="email" name="emailsignup" placeholder="YOUR EMAIL" required />
        
        <button type="submit">SIGN UP</button>
        </form>
      </div>

      <ul class="social-icons">
        <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
        <li><a href="#"><span class="fab fa-behance"></span></a></li>
      </ul>

      <img src="https://onclickwebdesign.com/wp-content/uploads/footer-icon.png" class="bicep" alt="Bicep flex icon" />
<!--
      <small>
        Copyright &copy;2020 All rights reserved |  <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
      </small>

-->
      
    </div>
  </footer>

  <div id="search-container">
    <span id="search-container-hide" class="fa fa-times"></span>
    <h3>Search</h3>
    <div class="search-container-input">
      <input type="text" name="search" placeholder="Search this site" />
      <button>Search</button>
    </div>
  </div>

  <div id="video-frame">
    <span id="video-frame-hide" class="fa fa-times"></span>
    <div class="video-frame-container">
      <div class="video-frame-scaler">
          <iframe id="embed-video" src="https://www.youtube.com/watch?v=mL24xiL-bRI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <script>
    // document ready function
    $(function () {
      // store jquery references to elements in const variables
      const headerNav = $('header nav');
      const hamburgerMenu = $('#hamburger-menu');
      const search = $('#search');
      const searchContainerHide = $('#search-container-hide');
      const searchContainer = $('#search-container');
      const youtubeButton = $('.youtube-button');
      const videoFrame = $('#video-frame');
      const videoFrameHide = $('#video-frame-hide');
      const embedVideo = $('#embed-video');

      // initialize hero slider
      $('#hero-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        pauseOnFocus: false,
        pauseOnHover: false,
        fade: true,
        speed: 1000,
        cssEase: 'linear'
      });


 // initialize event handling
      hamburgerMenu.on('click', () => {
        headerNav.toggle();
      });

      search.on('click', () => {
        searchContainer.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      searchContainerHide.on('click', () => {
        searchContainer.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
      });

      youtubeButton.on('click', () => {
        videoFrame.css({
          'opacity': '1',
          'visibility': 'visible',
          'z-index': '100'
        });
      });

      videoFrameHide.on('click', () => {
        videoFrame.css({
          'opacity': '0',
          'visibility': 'hidden',
          'z-index': '0'
        });
        
        embedVideo.prop('src', embedVideo.prop('src'));
      });
    });
  </script>
  <!--for dropdown-->
  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (e) {
      if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
  </script>
  
 <?php
// Check if the user is logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    echo
    "
    <script>
      var y=document.getElementById('login');
      var x = document.getElementById('dropdown');
        x.style.display = 'block';
        y.style.display='none';
    </script>
    
    ";
    $useremail=$_SESSION['username'];
   
    $userquery="SELECT * FROM `users` WHERE Email='$useremail'";
    $result=mysqli_query($con,$userquery);
    
    $sno=mysqli_fetch_assoc($result);
    $name=$sno['username'];
    
    echo
    "
    <script>
    document.getElementById('cg').innerHTML='".$name."'
    </script>
    ";
    
}
else{
  session_destroy();
}
?>
 
</body>
</html>