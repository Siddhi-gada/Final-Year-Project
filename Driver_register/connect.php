<?php

if(isset($_POST["submit"])){

    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $emailid = $_POST["emailid"];
    $workExperience = $_POST["workExperience"];
    $years = $_POST["years"];

    //connect to database
    $con=mysqli_connect('localhost','root','','ace_driving_school');
    if($con->connect_error){
        die("Connection Failed :".$con->connect_error);
    }else{
        $target_dir = "C:/xampp\htdocs\Main_folder\Final Year Project(3-1-23)\image_Aadharcard/";
        $target_file = $target_dir . basename($_FILES["aadharcard"]["name"]);
        move_uploaded_file($_FILES["aadharcard"]["tmp_name"], $target_file);
        $aadharcard = $target_file;
        
        $target_dir = "C:/xampp\htdocs\Main_folder\Final Year Project(3-1-23)\image_pancard/";
        $target_file = $target_dir . basename($_FILES["pancard"]["name"]);
        move_uploaded_file($_FILES["pancard"]["tmp_name"], $target_file);
        $pancard = $target_file;
        
        $target_dir = "C:/xampp\htdocs\Main_folder\Final Year Project(3-1-23)\image_drivinglicense/";
        $target_file = $target_dir . basename($_FILES["drivinglicense"]["name"]);
        move_uploaded_file($_FILES["drivinglicense"]["tmp_name"], $target_file);
        $drivinglicense = $target_file;
        
        $target_dir = "C:/xampp\htdocs\Main_folder\Final Year Project(3-1-23)\image_certificate/";
        $target_file = $target_dir . basename($_FILES["certificate"]["name"]);
        move_uploaded_file($_FILES["certificate"]["tmp_name"], $target_file);
        $certificate = $target_file;
        
        $target_dir = "C:/xampp\htdocs\Main_folder\Final Year Project(3-1-23)\image_profile/";
        $target_file = $target_dir . basename($_FILES["profileimage"]["name"]);
        move_uploaded_file($_FILES["profileimage"]["tmp_name"], $target_file);
        $profileimage = $target_file;
        
        
        //insert data into database
        $query = "INSERT INTO driver_register(firstname, middlename, lastname, dob, gender,aadharcard,pancard,drivinglicense, phone, emailid, workExperience,certificate,profileimage,years) 
                  VALUES('$firstname','$middlename','$lastname','$dob','$gender','$aadharcard','$pancard','$drivinglicense','$phone','$emailid','$workExperience','$certificate','$profileimage','$years')";

        $result = mysqli_query($con, $query);

        if($result){
            echo "Registration Successful";
        }else{
            echo "Error: Failed to execute query. " . mysqli_error($con);
        }

        mysqli_close($con);
    }

}

?>