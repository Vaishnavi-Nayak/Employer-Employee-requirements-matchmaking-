<?php
$name=$_POST['name'];
$usn=$_POST['usn'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$address=$_POST['address'];


//db connection

$conn= new mysqli('localhost','root','','employee');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    exit();
}

else{
    $stmt=$conn->prepare("insert into candidate_information(name,usn,dob,gender,email,phone,country,address)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssiss",$name,$usn,$dob,$gender,$email,$phone,$country,$address);
    $stmt->execute();
    echo "stored successfully....";
    $stmt->close();
    $conn->close();
}
?>