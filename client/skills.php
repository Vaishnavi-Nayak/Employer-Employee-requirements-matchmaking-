<?php
$skill1=$_POST['skill1'];
$value1=$_POST['value1'];
$skill2=$_POST['skill2'];
$value2=$_POST['value2'];
$skill3=$_POST['skill3'];
$value3=$_POST['value3'];
$skill4=$_POST['skill4'];
$value4=$_POST['value4'];
$language=$_POST['lang'];
$lg=" ";
foreach ($language as $lg1 ) {
    # code...
    $lg .= $lg1.",";
}
   
    




$conn= new mysqli('localhost','root','','employee');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    exit();
}

else{
    $stmt=$conn->prepare("insert into skills(skill1,value1,skill2,value2,skill3,value3,skill4,value4,language)
    values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sisisisis",$skill1,$value1,$skill2,$value2,$skill3,$value3,$skill4,$value4,$language);
    $stmt->execute();
    echo "stored successfully....";
    $stmt->close();
    $conn->close();
}
?>






