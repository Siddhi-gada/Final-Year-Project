<?php
$age=$_POST['age'];
$exp=$_POST['exp'];
$license=$_POST['license'];
//database connection
$conn = mysqli_connect('localhost','root','','ads');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into acedrivingschool(age,exp,license)values(?,?,?)");
    $stmt->bind_param("sss",$age,$exp,$license);
    $stmt->execute();
    echo"data saved";
    $stmt->close();
    $conn->close();
}
?>