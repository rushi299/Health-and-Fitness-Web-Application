<?php
include 'configmain.php';
if (isset($_POST)) {

    $name=$_POST['username'];
    $last=$_POST['lastname'];
    $email=$_POST['email'];
    $cpass=md5($_POST['psw']);
    $pass=md5($_POST['cpsw']);
    $existsql="SELECT * FROM `users` WHERE Email='$email'";
    $result=mysqli_query($con,$existsql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0)
    {
            
            echo "
        <script>
        Swal.fire(
         'Good job!',
         'Email already taken or registered',
         'success')
        </script>
        ";
    }
    else{

    if($pass == $cpass){

        $query2="INSERT INTO  `users` ( `username`, `Last name`, `Email`, `Password`,`date`) VALUES ( '$name', '$last', '$email', '$pass',current_timestamp())";
        $check=mysqli_query($con,$query2);
        if($check)
        {
        // echo "
        // <script>
        // Swal.fire(
        //  'Good job!',
        //  'Account created succesfully',
        //  'success')
        // </script>
        // ";
        
        }
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location:home.php");
    }
    else{
       
        echo "
        <script>
        Swal.fire(
         'Good job!',
         'Passwords do not match',
         'success')
        </script>
        ";
        // $showError = "Passwords do not match";
    }
}
        
    }
else{
    echo "No data";
}

?>