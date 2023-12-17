<?php
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];




$conn= new mysqli('localhost','root','','employee');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    exit();
}

else{
    $stmt=$conn->prepare("insert into preferences(p1,p2,p3)
    values(?,?,?)");
    $stmt->bind_param("sss",$p1,$p2,$p3);
    $stmt->execute();
    echo "stored successfully....";
    $stmt->close();
    $conn->close();
}
?>
