<?php
include 'configmain.php';
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link href="CSS/blog.css" type="text/css" rel="Stylesheet" />
  
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

      
      <section id="bgimage">
         <div>
             <img src=Images/Bgimage-1.jpg alt="Blog-image">
         </div>
      </section>

      <section id="flashcardblog">
     <a  href="main.php"> <div id="anco"> post here</div></a>
        <h3 id="h3b"> BLogs</h3>

        <div class="container">
        

         <!-- some php script -->
        <?php
      $server="localhost";
      $username="id13674277_root";
      $password="P5SDYG<Zh\YvCl&C";
      $database="id13674277_blog";
      $connection=mysqli_connect("$server","$username","$password","$database");
      // if($connection){
      //     echo"yes";
      //     echo"<br>";
      // }else{
      //     echo"no";
      // }
      $asaaa="SELECT * FROM `BLOG`";
      $resnew=mysqli_query($connection,$asaaa);
      // if($resnew)
      //      {
      //        echo "yashdoney";
      //      }
      //      else{
      //        echo"nodoney".mysqli_error($connection);
      //      }

      while($sno=mysqli_fetch_assoc($resnew))
      {
          

        echo '<div class="blogcards">
        <div class="imageclass">
          <img src="Images/Salad-diet.jpg" alt="diet-info">
        </div>
        <div class="infoofdiet"><h3>'.$sno['NAME'].'
          <p>'.$sno['Description'].' </p>
        </div>        
      </div>';



          // echo '<div style="color: black;background-color:green;width: 600px;">'.$sno['Description'].'</div>';

      }
    ?>
        
       

          

          


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
    
        <!--  <small>
            Copyright &copy;2020 All rights reserved | This template is made with <span class="fa fa-heart"></span> by <a href="https://colorlib.com">Colorlib</a>
          </small> -->
        </div>
      </footer>
 <script src="/extraa js/dropdown.js"></script>
    <?php
    include 'extraa php/dropdown.php';
    ?>
</body>
</html>