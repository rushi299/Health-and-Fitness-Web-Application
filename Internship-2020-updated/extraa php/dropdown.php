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