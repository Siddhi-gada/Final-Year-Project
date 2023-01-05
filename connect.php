<?php
$age=$_POST['age'];
$exp=$_POST['exp'];
$license=$_POST['license'];
//database connection
$conn = mysqli_connect('localhost','root','','charitize');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into forms(age,exp,licence)values(?,?,?)");
    $stmt->bind_param("sss",$age,$exp,$license);
    $stmt->execute();
    echo"data saved";
    $stmt->close();
    $conn->close();
}
?>
