<?php

    session_start();

    include('EmployerLoginConnect.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //to prevent from mysqli injection
    $email = stripcslashes($email);
    $hashedpassword = stripcslashes($password);
    $email  = mysqli_real_escape_string($con,$email);
    $password = mysqli_real_escape_string($con,$password);

    $sql = "select * from employersignup where email = '$email' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result); 

    if($count == 1)
    {
      echo "<h1><center>Login successful</center></h1>";
      echo "<script>window.location.assign('candidate.php');</script>";
    }
    else
    {
      echo "<script>window.location.assign('EmployerLogin.html');</script>";
      echo "<script> alert(Login failed. Invalid username and password);</script>";
    }

    


?>