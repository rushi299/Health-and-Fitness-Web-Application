<?php

require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fat-burn card-2</title>
  <link href="CSS/flash-cards-style.css" rel="stylesheet">
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

  <h1 id="h1heading">PROGRAM-2 Intermediate fat loss</h1>
  <hr>
  <div class="packs">
        <div class="content">
           <table id="customers">
            <tr>
              <th>Exercise</th>
              <th>Set</th>
              <th>Repitation</th>
            </tr>
            <tr>
              <td>Forearm Plank</td>
              <td>1-2</td>
              <td>30 sec</td>
            </tr>
            <tr>
              <td>Basic Situps</td>
              <td>3</td>
              <td>10 </td>
            </tr>
            <tr>
              <td>Knee high crunches</td>
              <td>3</td>
              <td>10 </td>
            </tr>
            <tr>
              <td>Basic crunches</td>
              <td>3</td>
              <td>10 </td>
            </tr>
            <tr>
              <td>Situp & Twist</td>
              <td>3</td>
              <td>10 </td>
            </tr>
            <tr>
              <td>Superman crunches</td>
              <td>3</td>
              <td>10 </td>
            </tr>
            
          </table>
          <h3 id="h3heading">Exercise Table</h3>

        </div>
        <div class="video">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/YUEs8yQ-MBs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         
          <h3 id="h3heading">video tutorial</h3>

        </div>
        
    </div>
  
</body>
</html>