<?php

if(isset($_POST["submit"])){

    $title = $_POST["title"];
    $decsription = $_POST["decsription"];

    //check if image is uploaded
    if(!empty($_FILES["image"]["name"])){
        $target_dir = "..\..\image_car/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file;

    //connect to database
    $con=mysqli_connect('localhost','root','','ace_driving_school');
    if($con->connect_error){
        die("Connection Failed :".$con->connect_error);
    }else{
        //insert data into database
        $query = "INSERT INTO car_details (title, decsription, image)
                  VALUES('$title','$decsription','$image')";
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