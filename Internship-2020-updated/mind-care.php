<?php
include 'configmain.php';
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind.Care</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="CSS/mind-care.css" type="text/css" rel="Stylesheet" />
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link href="CSS/dropdown.css" type="text/css" rel="Stylesheet" />
</head>
<body>
    <section id="hero">
        <header>
          <div class="container1">
            <div id="header-logo-mobile" class="top-gym-logo">
              <a href="#">FItness<br />Club</a>
            </div>
            <nav>
              <ul class="flex">
                <li><a href="home.php">Home</a></li>
            <!--<li><a href="#">About Us</a></li>-->
            <li><a href="mind-care.php">Mind.care</a></li>
             <li><a href="fitness-care.php">Fit.care</a></li>
            <li id="header-logo" class="top-gym-logo">
              <a href="#">Fitness<br />Club</a>
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
            <!--<li>-->
            <!--  <button id="search"><span class="fa fa-search"></span></button>-->
            <!--</li>-->
          
              </ul>
            </nav>
    
            <button id="hamburger-menu">
              <span class="strip"></span>
              <span class="strip"></span>
              <span class="strip"></span>
            </button>
          </div>
        </header>
      </section>

      <section class="intro">
        <div class="leftin">
            <h1 >BE FIT.BE CURE.EAT WELL</h1>
            <p>At Mind-care we care for your stress and other stuff with excellence
              of meditation,yoga and many more.</p>
        </div>
        <div class="rightin">
                <!-- <div class="card"><img src="Images/meditation.jpg" alt=""></div>
                <div class="card"><img src="Images/yoga1.png" alt=""></div>
           
                <div class="card"><img src="Images/12.png" alt=""></div>
                <div class="card"><img src="Images/yoga3.png" alt=""></div>          -->
                <div class="gallery-wrap wrap-effect-1">
                  <div class="item"></div>
                  <div class="item"></div>
                  <div class="item"></div>
                  <div class="item"></div>
                  <div class="item"></div>
                </div>
            </div>
      </section>

      <!-- buttons for toggling into live classes and consulting only. -->
      <div style="display: flex; justify-content: center;align-items: center;">
        <button id="btnClick1" class="buttonClass">Live</button>
        <button id="btnClick2" class="buttonClass btncolor">Consult</button>
        
        <hr>
    </div>

      <section class="main commonForAll">
        <h3 class="headingcommon"> Doctor Consult</h3>
        <div class="bottom">
            <div class="cardmain">
               <a href="doctor-card-1.php"> <div class="up">
                    <img src="Images/doctor-1.jpg" alt="">
                </div>
                <div class="down">
                    <h3>General Physician</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                            dignissimos minima!</p>
                </div></a>
            </div>

            <div class="cardmain">
                <a href="doctor-card-1.php"><div class="up">
                    <img src="Images/doctor-2.jpg" alt="">
                </div>
                <div class="down">
                    <h3>Dentist</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                            dignissimos minima!</p>
                </div></a>
            </div>

            <div class="cardmain">
                <a href="doctor-card-1.php"><div class="up">
                    <img src="Images/doctor-3.jpg" alt="">
                </div>
                <div class="down">
                    <h3>Nutrition consultation</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
                </div></a>
            </div>
        </div>
    </section>

    <section id="yogamod" class="commonForAll">
      <h3 class="headingcommon"> Yoga Mod</h3>
      <div class="bottom">
         
          <div class="cardmain">
             <a href="yoga-warm-up-card.php"> <div class="up">
                  <img src="Images/yoga2.png" alt="">
              </div>
              <div class="down">
                  <h3>Yoga Warm-Up</h3>
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                          dignissimos minima!</p>
              </div></a>
          </div>

          <div class="cardmain">
              <a href="yoga-stretch-card.php"><div class="up">
                  <img src="Images/yoga1.png" alt="">
              </div>
              <div class="down">
                  <h3> yoga stretch</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                          dignissimos minima!</p>
              </div></a>
          </div>

          <div class="cardmain">
              <a href="yoga-suryanamaskar-card.php"><div class="up">
                  <img src="Images/yoga3.png" alt="">
              </div>
              <div class="down">
                  <h3>yoga-suryanamaskar</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                      dignissimos minima!</p>
              </div></a>
          </div>
      </div>
    </section>

    <section id="meditationmod" class="commonForAll">
      <h3 class="headingcommon"> Meditation </h3>
      <div class="bottom">

          <div class="cardmain">
             <a href="#"> <div class="up">
                  <img src="Images/med1.jpg" alt="">
              </div>
              <div class="down">
                  <h3>meditation-Stress</h3>
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                          dignissimos minima!</p>
              </div>
          </a>
          </div>

          <div class="cardmain">
              <a href="#"><div class="up">
                  <img src="Images/med2.jpg" alt="">
              </div>
              <div class="down">
                  <h3>meditation-Focus</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                          dignissimos minima!</p>
              </div></a>
          </div>
          
          <div class="cardmain">
              <a href="#"><div class="up">
                  <img src="Images/meditation.jpg" alt="">
              </div>
              <div class="down">
                  <h3>meditation-Sleep</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                      dignissimos minima!</p>
              </div></a>
          </div>
      </div>
    </section>


      <footer class="commonForAll">
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
            <input type="text" placeholder="YOUR EMAIL" />
            <button>SIGN UP</button>
          </div>
    
          <ul class="social-icons">
            <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
            <li><a href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a href="#"><span class="fab fa-behance"></span></a></li>
          </ul>
    
          <img src="https://onclickwebdesign.com/wp-content/uploads/footer-icon.png" class="bicep" alt="Bicep flex icon" />
    
 <!--         <small>
            Copyright &copy;2020 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
          </small> -->
        </div>
      </footer>

      <div id="videoTutorial" class="videodivclass" style="display:none;">
        <div class="workouttutorial">
            <h1> Live Sessions</h1>
            <div class="videoframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/DHD1-2P94DIs" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="videoframe">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/DHD1-2P94DIs" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
            </div>
            <div class="videoframe">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/DHD1-2P94DIs" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <div class="videoframe">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/DHD1-2P94DIs" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
            </div>
        </div>
      </div>


      <script>
          $('#btnClick1').on('click', function () {

            $('#videoTutorial').show();
            $('.commonForAll').hide();

          });

          $('#btnClick2').on('click', function () {

              // $('.main').show().siblings('#2').hide();
            $('.commonForAll').show();
            $('#videoTutorial').hide();

          });
      </script>
    <script src="/extraa js/dropdown.js"></script>
    <?php
    include 'extraa php/dropdown.php';
    ?>
    
</body>
</html>