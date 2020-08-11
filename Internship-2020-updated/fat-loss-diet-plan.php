<?php

require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fat-loss diet</title>
  
  <link href="CSS/flash-cards-style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  
 

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
            <li><a href="home.html">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="mind-care.html">Mind.care</a></li>
            <li id="header-logo" class="top-gym-logo">
              <a href="#">Fitness<br />Club</a>
            </li>
            <li><a href="Fitness-care.html">Fit.care</a></li>
            <li><a href="diet-care.html">Diet.care</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>
              <button id="search"><span class="fa fa-search"></span></button>
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
  </section>
  <h1 id="h1heading">Fat loss diet </h1>
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
              <td>Breakfast</td>
              <td>bread-peanut butter</td>
              <td>2-slice</td>
            </tr>
            <tr>
              <td>snack</td>
              <td>nuts</td>
              <td>5 </td>
            </tr>
            <tr>
              <td>lunch</td>
              <td>Roti-sabji-butter-milk</td>
              <td>3/small-bowl/1-full glass </td>
            </tr>
            <tr>
              <td>4:00-5:00PM</td>
              <td>One fruite OR milk</td>
              <td>250ml </td>
            </tr>
            <tr>
              <td>Pre-workout</td>
              <td>dry-fruites:almonds,walnuts</td>
              <td>6-7 </td>
            </tr>
            <tr>
              <td>Post-workout</td>
              <td>4 boiled eggs OR boiled mug</td>
              <td> 3 white eggs and 1 whole/ 1 bowl</td>
            </tr>
            <tr>
              <td>Dinner</td>
              <td>roti-sabji</td>
              <td> 2/small-bowl</td>
            </tr>
            <tr>
              <td>before bed</td>
              <td>milk</td>
              <td>250 ml</td>
            </tr>
            <tr>
              <td colspan="3">* Either roti/sabji OR dal/rice is option</td>
            </tr>
          </table>
          <h3 id="h3heading">General Diet</h3>

        </div>
        <div class="video">

          <iframe width="560" height="315" src="https://www.youtube.com/embed/DBW5f-VOoGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <h3 id="h3heading">video tutorial</h3>

        </div>
        
    </div>
  
</body>
</html>