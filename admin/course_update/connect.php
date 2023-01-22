<?php 
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ace_driving_school');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["send"])) {
    $id=mysqli_real_escape_string($conn,$_POST['id']);
$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$Fees=mysqli_real_escape_string($conn,$_POST['Fees']);
$start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
$end_date=mysqli_real_escape_string($conn,$_POST['end_date']);
    $query = "UPDATE courses SET title='$title',description='$description',Fees='$Fees',start_date='$start_date',
    end_date='$end_date' WHERE id='$id'";
    $query_run=mysqli_query($conn,$query);
    if (!$query_run) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    if (mysqli_affected_rows($conn) > 0) {
        header('Location: ../../admin/message\update\update.html');
    } else {
        header('Location: ../../admin/message\update_unsccessful\upadte_unsccessful.html');
    }
}
