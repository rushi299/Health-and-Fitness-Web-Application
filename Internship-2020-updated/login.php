<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
    header("location: home.php");
    exit;
}
else{
    session_destroy();
}
?>
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'configmain.php';
    $username = $_POST["username"];
    $password = md5($_POST["password"]); 
    // echo $password;
    
     
    $sql = "Select * from users where Email='$username' AND Password='$password'";
    $result = mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
   
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: home.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rowdies&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        .main {
            z-index: -1;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: url(Images/bg1.png) no-repeat center center fixed;
            background-size: cover;
            filter: blur(5px);
        }

        ::placeholder {
            color: wheat;
            font-weight: bold;
            opacity: 1;
            font-family: 'rowdies','Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            /* Firefox */
        }

        .login-des {
            border-radius: 12px;
            border-color: rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            width: 450px;
            margin: auto;
            height: 500px;
            flex-direction: column;
           
            background: rgb(222 203 203 / 37%);
}


        }

        form input:focus {
            background-color: rgba(0, 0, 0, .4);

        }

        form input.email:focus {
            background-image: none;

        }

        form input.password:focus {
            background-image: none;

        }

        form input.email {
            color: wheat;
            width: 290px;
            height: 36px;
            background-color: rgba(0, 0, 0, 0.2);
            border-color: rgba(0, 0, 0, 0.2);
            background: url(Images/eml1.svg);
            background-size: 25px;
            background-repeat: no-repeat;
            background-position: right 7px bottom 4px;
            /* margin-left: 108px; */
            padding: 10px;
            /* margin-top: 13px; */
            margin: 13px 108px;

        }



        form input.password {
            width: 290px;
            height: 36px;
            background-color: rgba(0, 0, 0, 0.2);
            border-color: rgba(0, 0, 0, 0.2);
            background: url(Images/pl.svg);
            background-size: 27px;
            background-repeat: no-repeat;
            background-position: right 7px bottom 3px;

            padding: 10px;

            margin: 13px 108px;
        }

        .head {
            text-align: center;
            font-family: 'Rowdies', cursive;
            color:black;
            font-weight: bold;
            font-size: 44px;
            margin: 15px;
        }
        }
    </style>
</head>

<body>
    <div class="main"></div>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <h1 class="head">Welcome to health and fitness club</h1>
    <div class="login-des">
        <img style="margin: 51px;" src="123.png" alt="">
        <form action="login.php" method="post">


            <input type="text" class="email" id="username" name="username" placeholder="EMAIL">
            <input type="password" class="password" id="password" name="password" placeholder="PASSWORD">


            <button style="margin: 12px 217.95px;" type="submit" class="btn btn-primary">Login</button>


        </form>
        <a style="color: #f9f3f1;" href="signup.php">Not an account? Sign up</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>