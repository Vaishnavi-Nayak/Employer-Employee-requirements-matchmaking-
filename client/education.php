<?php
$school_name=$_POST['s_name'];
$x_percentage=$_POST['x_number'];
$school_place=$_POST['s_place'];
$PU_name=$_POST['pu_name'];
$PU_percentage=$_POST['pu_number'];
$PU_place=$_POST['pu_place'];
$degree=$_POST['degree'];
$stream=$_POST['stream'];
$cgpa=$_POST['cgpa'];
$degree_college=$_POST['degree_name'];
$passout=$_POST['passout'];
$degree_place=$_POST['degree_place'];


$conn= new mysqli('localhost','root','','employee');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    exit();
}

else{
    $stmt=$conn->prepare("insert into education(school_name,x_percentage,school_place,PU_name,PU_percentage,PU_place,degree,stream,cgpa,degree_college,passout,degree_place)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sississsisss",$school_name,$x_percentage,$school_place,$PU_name,$PU_percentage,$PU_place,$degree,$stream,$cgpa,$degree_college,$passout,$degree_place);
    $stmt->execute();
    echo "stored successfully....";
    $stmt->close();
    $conn->close();
}
?>






