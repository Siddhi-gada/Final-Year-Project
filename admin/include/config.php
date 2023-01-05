<?php
$con= mysqli_connect('localhost','root','','ace_driving_school');
if($con->connect_error)
{
    die("Connection Failed :".$con->connect_error);
}

?>