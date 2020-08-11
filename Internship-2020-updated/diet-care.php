<?php
include 'configmain.php';
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet.care</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
     <link href="CSS/diet-care.css" type="text/css" rel="Stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
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
            <p>At Diet-care we try to boost your knowledge of diet with 
              diet plan,videos and much more.</p>
        </div>

        <!-- Image swiper  -->
    <!-- <div class="rightin">
      <div class="gallery-wrap wrap-effect-1">
        <div class="item"><img src="Images/12.png" alt=""></div>
        <div class="item"><img src="Images/info2.png" alt=""></div>
        <div class="item"><img src="Images/info2.png"></div>
        <div class="item"><img src="Images/info3.png"></div>
        <div class="item"><img src="Images/info4.jpg"> </div>
      </div>         
    </div>      -->

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


      <section class="info" id="carbohydratesbgid">
        <div class="titleclass">
          <h3 class="headingcommon">Importance of Carbohydrates</h3>
        </div>

        <div class="leftimgclass">
          <img src="Images/Salad-diet.jpg" alt="">
        </div>
        <div class="rightinfoclass">
          <h5>What is Carbohydrates?</h5>
          <p>In addition to protein and fat, carbohydrates are one of the three macronutrients in food, and you need them for energy and fuel. When you exercise, you need something to start your engine and keep it going, and that something often comes in the form of healthy carbs.</p>
          
          <h5> What happens when we eat carbs?</h5>
          <p>When you eat carbohydrates, they get broken down into sugars (glucose, fructose, and galactose) and are either quickly used for energy or are stored as glycogen in your liver and muscles for use later. When you eat any type of carb, your body also releases insulin to help you regulate an increase in blood sugar.</p>
          
        </div>        
      </section>

      <section class="info" id="proteinbgid">
        <div class="titleclass">
          <h3 class="headingcommon">Importance of Protein</h3>
        </div>

        <div class="leftimgclass">
          <img src="Images/diet1.jpg" alt="">
        </div>
        <div class="rightinfoclass">
          <h5>What is protein?</h5>
          <p>Protein is a macronutrient. To put it simply, protein is one of the main nutrients that every person needs to maintain a healthy body. It helps to repair any internal or external damage, supports the immune system and contributes to an overall feeling of wellbeing.</p>
          
          <h5>Protein, Nutrition and Exercise </h5>
          <p>It doesn’t matter which way you look at it, protein is essential for exercise. Anyone undertaking any kind of exercise routine is definitely going to need more protein than someone who doesn’t. This is because when you exercise, you are effectively tearing and breaking muscle fibres apart, which then need to be repaired by the body, which requires protein.<br>
          From a dietary point of view, you can get enough day to day protein from eating food such as beans, soy protein products, nuts and other such foods. If you are exercising, it is beneficial to supplement this normal intake of protein with additional food items such as protein bars, powders or shakes. 

          </p>
        </div>        
      </section>

      <section class="info" id="caloriesbgid">
        <div class="titleclass">
          <h3 class="headingcommon">Importance of calories</h3>
        </div>

        <div class="leftimgclass">
          <img src="Images/diet2.jpg" alt="">
        </div>
        <div class="rightinfoclass">
          <h5>What is calories?</h5>
          <p>Simply put, a calorie is a unit of food energy, a way to understand how much energy the proteins, carbs, and fats and sugar and alcohol in food give our bodies when we eat them. You need enough calories to get through your day with circulation, respiration, organ function, general activities of living and exercise, plus additional energy for your muscles to use to build up stronger and bigger after working out.
          </p>  
          
          <h5>When should you consume calories?</h5>
          <p>When it comes to workout performance, you definitely want to make sure you have enough fuel to get through a workout without feeling hungry or fatigued.<br>
          Make sure you consume some food 30 minutes to an hour before working out. You want to allow yourself enough time to digest, or you risk feeling sick.<br>
          Go for a snack with about 200 to 250 calories try some nut butter on toast or with a piece of fruit, such as an apple. To help build muscle after the workout, aim to get some food within 30 minutes post-workout, such as two hard-boiled or scrambled eggs with a whole-wheat English muffin. (A little butter won’t kill you, either.)
          </p>
        </div>        
      </section>


      <section class="info" id="waterbgid">
        <div class="titleclass">
          <h3 class="headingcommon">Importance of Body-water level. </h3>
        </div>

        <div class="leftimgclass">
          <img src="Images/diet3.jpg" alt="">
        </div>
        <div class="rightinfoclass">
          <h5>What is Body Water?</h5>
          <p>Body water is the total amount of fluid in a human body. The human body should consist of at least 50% of water. The exact percentage varies based on a number of factors (e.g. age and gender). Body water is the primary building block for cells. It helps to regulate the internal body temperature, strengthens your muscles and moisturizes your skin. These are just a few examples why body water and drinking water is so important.
          </p>  
          
          <h5>What is ideal body water percentage?</h5>
          <p>The ideal body water percentage varies. It is influenced by different factors. Gender, age and body composition affect this percentage. In general, women have a lower body water percentage than men. This is because women have more tissue than men. The ideal percentage for adult women will fluctuate between 45 and 60%, while the ideal percentage for adult men will be between 50 and 65% of the total body. For the real athletic body types it is even recommended to have 5% more body water than the average adult range.
          </p>
        </div>        
      </section>

      <section class="main">
        <h3 style="color: black; letter-spacing: 5px;">Diet-plans</h3>
        <div class="bottom">
            <div class="cardmain">
               <a href="mass-gain-diet-plan.php"> <div class="up">
                    <img src="Images/diet4.jpg" alt="">
                </div>
                <div class="down">
                    <h3>Mass Gain</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                            dignissimos minima!</p>
                </div></a>
            </div>
    
            <div class="cardmain">
                <a href="weight-loss-diet-plan.php"><div class="up">
                    <img src="Images/diet5.jpg" alt="">
                </div>
                <div class="down">
                    <h3>Weight Loss</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                            dignissimos minima!</p>
                </div></a>
            </div>
    
            <div class="cardmain">
                <a href="fat-loss-diet-plan.php"><div class="up">
                    <img src="Images/diet6.jpg" alt="">
                </div>
                <div class="down">
                    <h3>Fat Loss</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo fugiat nesciunt sint ratione
                        dignissimos minima!</p>
                </div></a>
            </div>
          </div>
      </section>

      
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
<!--    
          <small>
            Copyright &copy;2020 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
          </small> -->
        </div>
      </footer>

      <!-- <script>
        const swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    mousewheel: {},
    effect: 'cube',
    keyboard: {
      enabled: true,
      onlyInViewport: false
    }
  });
      </script>
     -->
     <script src="/extraa js/dropdown.js"></script>
    <?php
    include 'extraa php/dropdown.php';
    ?>
</body>
</html>