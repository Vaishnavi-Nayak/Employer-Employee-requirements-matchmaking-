<?php

session_start();
$conn=mysql_connect('localhost','root','','employee')or die('Unabl to connect');




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
