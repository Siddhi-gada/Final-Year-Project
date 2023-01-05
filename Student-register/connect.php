<?php 
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$address=$_POST['address'];
$password=$_POST['password'];
$phone=$_POST['phone'];

//database connection 
$con=mysqli_connect('localhost','root','','ace_driving_school');
if($con->connect_error)
{
    die("Connection Failed :".$con->connect_error);
}
else
{
    $stmt =$con->prepare("insert into student_register(firstname,middlename,lastname,emailid,address,password,phone)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssi",$firstname,$middlename,$lastname,$emailid,$address,$password,$phone);
    $stmt->execute();
    echo"regiatration successfully";
    $stmt->close();
    $con->close();
}
?>