<?php
include 'configmain.php';
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>weight-loss diet</title>
  
  <link href="CSS/flash-cards-style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
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
  <h1 id="h1heading">Weight loss diet </h1>
  <hr>
  <div class="packs">
        <div class="content">
           

            <table id="customers">
            <tr>
              <th>Time</th>
              <th>Food</th>
              <th>Quantity</th>
            </tr>
            <tr>
              <td>Wakeup(early morning)</td>
              <td>fat cutter drink or water(warm-normal)</td>
              <td>1-glass or 2-3 glass</td>
            </tr>
            <tr>
              <td>Breakfast</td>
              <td>oatmeal and egg or chickpeas spinach burji</td>
              <td>1-plate and 3-4 eggs or 1 and half plate</td>
            </tr>
            <tr>
              <td>snack</td>
              <td>nuts or water only </td>
              <td>1 litre</td>
            </tr>
            <tr>
              <td>lunch</td>
              <td>Salads,brown-rice and dal or whole whear roti and protien curry</td>
              <td>As per hunger </td>
            </tr>
            <tr>
              <td>Hour after lunch</td>
              <td>water</td>
              <td>2-3 glasses</td>
            </tr>
            <tr>
              <td>Pre-workout or evening</td>
              <td>Green tea,banana,nuts butter</td>
              <td>as per your requirements</td>
            </tr>
            <tr>
              <td>Dinner</td>
              <td>roti-sabji</td>
              <td> 2/small-bowl</td>
            </tr>
            <tr>
              <td>before bed</td>
              <td>warm-milk</td>
              <td>250 ml</td>
            </tr>
          </table>
          <h3 id="h3heading">General Diet</h3>

        </div>
        <div class="video">

          <iframe width="560" height="315" src="https://www.youtube.com/embed/-X6395gykhg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h3 id="h3heading">video tutorial</h3>

        </div>
        
    </div>
  <script src="/extraa js/dropdown.js"></script>
    <?php
    include 'extraa php/dropdown.php';
    ?>
</body>
</html>