<?php

if(isset($_POST["submit"])){

    $title = $_POST["title"];
    $description = $_POST["description"];
    $Fees = $_POST["Fees"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    //check if image is uploaded
    if(!empty($_FILES["courses_image"]["name"])){
        $target_dir = "..\..\image_profile/";
        $target_file = $target_dir . basename($_FILES["courses_image"]["name"]);
        move_uploaded_file($_FILES["courses_image"]["tmp_name"], $target_file);
        $courses_image = $target_file;

    //connect to database
    $con=mysqli_connect('localhost','root','','ace_driving_school');
    if($con->connect_error){
        die("Connection Failed :".$con->connect_error);
    }else{
        //insert data into database
        $query = "INSERT INTO courses(title, description, Fees, courses_image, start_date, end_date)
                  VALUES('$title','$description','$Fees','$courses_image','$start_date','$end_date')";
        $result = mysqli_query($con, $query);

        if($result){
            echo "Registration Successful";
        }else{
            echo "Error: Failed to execute query. " . mysqli_error($con);
        }

        mysqli_close($con);
    }


    }
}

?>