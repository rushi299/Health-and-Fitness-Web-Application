<?php

    if(array_key_exists('btn', $_POST)) { 
        myfunction(); 
    } 
     function myfunction()
    {
        require_once('processsignup.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
    *{
        margin:0px;
        box-sizing:border-box;
    }
    body{
        padding:30px;
        
    }
    .main{
        width:800px;
        height:90vh;
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        align-items:center;
        justify-content:center;
        margin:auto;
    }

    label{
        font-family: monospace;
    font-weight: 900;
    font-size: large;
    }
    input{
        width: 50%;
    margin: 15px 0px;
    height: 29px;
        
    }
       .form1{ 
           width:100%;
           height:100%;
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
        justify-content:center;
       }
      button{
        width: 20%;
    height: 29px;
    background-color: #7171f3;
    color: white;
    font-weight: 800;
    border-radius: 12px;
      }
      hr{
          margin:10px 0px;
      }
      button:hover{
        background-color: #2b87a5;

      }
    </style>
</head>
<body>
    

<!--main work-->
    <div class="main">
    
    <form class="form1" action="signup.php"  method="post">
    <h1>Signup form</h1>
    <hr>
    <label for="username">USER NAME:</label>
    <input type="text" name="username" id="usn" required>
    <label for="lastname">LAST NAME:</label>
    <input type="text" name="lastname" id="lsn" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="eid" required>
    <label for="psw">PASSWORD:</label>
    <input type="password" name="psw" id="psd" required>
    <label for="psw"> CONFIRM PASSWORD:</label>
    <input type="password" name="cpsw" id="cpsd" required>
    <button type="submit" name="btn" id="btn" value="btn">sign up</button>

    </form>
    <!--for homepage signup-->
    <?php
if(isset($_POST['emailsignup'])){
$email=$_POST['emailsignup'];
echo
'
<script>
document.getElementById("eid").value="'.$email.'";
</script>
';
}
?>
    </div>
    
</body>
</html>