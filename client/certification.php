<?php
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];



//db connection

$conn= new mysqli('localhost','root','','employee');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    exit();
}

else{
    $stmt=$conn->prepare("insert into certification(c1,c2,c3,p1,p2,p3)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$c1,$c2,$c3,$p1,$p2,$p3);
    $stmt->execute();
    echo "stored successfully....";
    $stmt->close();
    $conn->close();
}
?>