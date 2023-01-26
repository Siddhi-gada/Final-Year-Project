<?php 
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ace_driving_school');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["send"])) {
    $id=mysqli_real_escape_string($conn,$_POST['id']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$middlename=mysqli_real_escape_string($conn,$_POST['middlename']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
$emailid=mysqli_real_escape_string($conn,$_POST['emailid']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $query = "UPDATE student_register SET firstname='$firstname',middlename='$middlename',lastname='$lastname',emailid='$emailid',
    address='$address',password='$password',phone='$phone' WHERE id='$id'";
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
?>
