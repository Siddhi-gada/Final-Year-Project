<?php 

  if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $aadharcard = $_FILES["aadharcard"]["name"];
    $pancard = $_FILES["pancard"]["name"];
    $drivinglicense = $_FILES["drivinglicense"]["name"];
    $phone = $_POST["phone"];
    $emailid = $_POST["emailid"];
    $workExperience = $_POST["workExperience"];
  
    //database connection 
    $con=mysqli_connect('localhost','root','','ace_driving_school');
    if($con->connect_error){
        die("Connection Failed :".$con->connect_error);
    }else{
        $stmt =$con->prepare("insert into driver_register(firstname, middlename, lastname, dob, gender, aadharcard, pancard, drivinglicense, phone, emailid, workExperience) values(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssisi",$firstname,$middlename,$lastname,$dob,$gender,$aadharcard,$pancard,$drivinglicense,$phone,$emailid,$workExperience);
        $stmt->execute();
        echo"registration successfully";
        $stmt->close();
        $con->close();
    }
  }
  ?>