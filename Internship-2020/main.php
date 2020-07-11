<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
div{
    background-color: white;
    color:black;
}
#btn{
  height:200px;
  width:600px;
}
#anco{
 
 cursor: pointer;
 background: #233EDE;
 color: #fff;
 font-size: 0.9rem;
 text-align: center;
 padding: 1.25rem 3rem;
 
 border-radius: 12px;
 text-transform: uppercase;
 font-weight: 500;
 font-family: 'Roboto', 'Helvetica', 'Sans-serif';
 letter-spacing: 2px;
 width: 200px;
 margin: auto;
 margin-top:12px;
 margin-bottom:12px;

}
#anco:hover{
box-shadow: rgba(42, 42, 233, 0.54) 0px 10px 19px 0px;
}
#flashcardblog a{
text-decoration: none;
margin: auto;
}
</style>
</head>
<body>

<form action="main.php" method="post">
  <div class="container">
    <h1>POST YOUR FEED</h1>
    <hr>

    <label for="email"><b>NAME</b></label>
    <input type="text" placeholder="NAME" name="email" required>

    <label for="lastname"><b>LASTNAME</b></label>
    <input type="text" placeholder="LAST NAME" name="lastname" required>

    <label for="desc"><b>Description</b></label>
    <br>
    <textarea placeholder="description" name="desc"  id="btn" cols="30" rows="10" required></textarea>
    <!-- <input type="textarea" placeholder="description" name="desc" id="btn" required> -->
    <hr>

    <button type="submit" class="registerbtn" onclick="alertfunction()" >POST</button>
  </div>

</form>
<div >
<?php
$server="localhost";
$username="id13674277_root";
$password="P5SDYG<Zh\YvCl&C";
 $conn=mysqli_connect("$server","$username","$password");


$database="id13674277_blog";
$connection=mysqli_connect("$server","$username","$password","$database");
//  if($connection){
//     echo"yes";
//   echo"<br>";
//  }else{
//   echo"no";
//  }

// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo "yesdone";
//     $emailid = $_POST['email'];
//     echo $emailid ;
//     $password = $_POST['psw'];
// }


if($connection){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      // echo "yesmin";
      // first this will happen
      // getting values from form
      $name=$_POST['email'];
      $lastname=$_POST['lastname'];
      $texta=$_POST['desc'];
      
      // inserting value in data base without function
      $query2="INSERT INTO `BLOG` ( `NAME`, `LASTNAME`, `Description`, `DATE`) VALUES ('$name', '$lastname', '$texta', current_timestamp())";
      
      $check=mysqli_query($connection,$query2);
      if($check)
      {
        echo "Done!your post has been uploaded";
      }
      else{
        echo"nodoney".mysqli_error($connection);
      }

        //when button is clicked this is happen
        //myFunction($connection,$name,$lastname,$texta);
          

      }
    //   else{
    //       echo"failed";
    //   }
}





// $quey="SELECT * FROM `user` WHERE email='$emailid'";
// $res=mysqli_query($connection,$quey);
// $row=mysqli_fetch_assoc($res);
// echo '<div style="color: black;background-color:green">'.$row['email'].'</div>';



// functions
function myFunction($connection,$name,$lastname,$texta)
  {
    
    //putting values in db;
    $query2="INSERT INTO `BLOG` ( `NAME`, `LASTNAME`, `Description`, `DATE`) VALUES ($name, $lastname, $texta, current_timestamp())";
     $check=mysqli_query($connection,$query2);
  }
  
  
?>

</div>
<div>
<a  href="blog.php"> <div id="anco"> Check Posts</div></a>
</div>
<script>
  function alertfunction()
  {
    
    if (window.confirm("ARE YOU SURE?")) {
    window.alert("YOUR FEED HAS BEEN POSTED");
    }
  }
  </script>
</body>
</html>
