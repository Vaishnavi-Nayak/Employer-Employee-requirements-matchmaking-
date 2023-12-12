<?php

    $email=$_POST['email'];
    $password=$_POST['password'];
    
    // $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);



    $servername="localhost";
    $username="root";
    $pass="";
    $dbname="employee";

    $conn = mysqli_connect($servername,$username,$pass,$dbname);
    if($conn->connect_error){
      die('Connection failed:'.$conn->connect_error);
    }else{
      
      $sql="insert into employeesignup(email,password) values('$email','$password'); ";
      
      try{
        if($conn->query($sql)==true)
        {
          echo "<script>alert('Signup successfull');</script>";
          $insert=true;
        }
      }
      catch(Exception $e){
        echo "<script>alert('You already have an account');</script>";
      }
    }
?>