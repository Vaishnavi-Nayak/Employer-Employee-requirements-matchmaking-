<?php
$insert=false;
if(isset($_POST['customerid'])){
    
   //set connection variables
    $server="localhost";
    $username="root";
    $password="";


//create a database connection
    $con =mysqli_connect($server,$username,$password);


//check for connection success
    if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
    }
// echo "Success connecting to the DB";


//collect post variables
   
    $customerid=$_POST['customerid'];
    $password=$_POST['password'];
    
    //$sql="INSERT INTO `dbms`.`log` (`loan_id`,`name`, `number`, `pnum`, `email`, `address`, `type`, `amount`, `reason`) 
   // VALUES ('$name', '$number', '$pnum', '$email', '$address,', '$type', '$amount', '$reason');";
  // $sql1= "INSERT INTO `dbms`.`customerlogin` (`customerid`, `password`) 
   // VALUES ( '$customerid', '$password');";
    $sql1="INSERT INTO `dbms`.`customerlogin` ( `customerid`, `password`) 
    VALUES ( '$customerid', '$password');";
    // $sql2= "INSERT INTO `dbms`.`customer` (`customerid`, `password`) 
    // VALUES ( '$customerid', '$password');";
   // echo $sql;


//execute the query
    if($con->query($sql1) == true  ){
   // echo "Successfully inserted";
     echo "<script> window.location.assign('page2.html');</script>";

   //flag for successful insertion
        $insert=true;
    }
    else{
    echo "ERROR: $sql1  <br> $con->error";
   
    }


//close the database connection
   $con->close();
    }
?>
