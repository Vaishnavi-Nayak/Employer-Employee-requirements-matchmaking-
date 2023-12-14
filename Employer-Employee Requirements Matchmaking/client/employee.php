<?php

session_start();
$conn=mysql_connect('localhost','root','','employee')or die('Unabl to connect');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <!-- <img src="logo.jpeg" alt="logo"> -->
        <h2>Hireasy</h2>
    <nav class="navigation">
       
        <a href="employee_login.html">Login</a>
        <a href="employee_signup.html">Sign Up</a>
    </nav>
</header>

<div class="wrapper">
    <div class="form-box login">
        <h2> Employee Login</h2>
        <form action="employee.php">
            <div class="input-box">
                <span class="icon"><ion-icon name="Email"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>

            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="Pass"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
                
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="login">login</button>
            <div class="login-register">
                <p>Don't have an account? <a href="signup.html" class="register-link">Register</a></p>

            </div>
        </form>

    </div>

</div>

<?php


if(isset($_POST['login'])){
    $Email=$_POST['Email'];
    $Pass=$_POST['Pass'];

    $select=mysqli_query($conn,"SELECT * FROM employee_signup WHERE Email='$Email' AND Pass='$Pass' ");
    $row=mysql_fetch_array($select);

    if(is_array($row)){
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["Pass"]=$row['Pass'];
        else{
            echo '<script type="text/javascript">';
            echo 'alert("Invalid email or password")';
            echo 'window.location.href="employee_login.php"';
            echo '</script>';

            
            
           
        }

    }

    if(isset($_SESSION["Email"])){
        header("Location:employee_login.php");
    }
}
?>

<script src="script.js"></script> 
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>