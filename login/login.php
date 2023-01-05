<?php
// Start a session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ace_driving_school');

// Check the connection
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['emailid']) && isset($_POST['password'])) {
  // Get the email and password from the form
  $emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Construct the SELECT query
  $query = "SELECT * FROM register WHERE emailid = '$emailid' AND password = '$password'";

  // Execute the query
  $result = mysqli_query($conn, $query);
  
  // Check if the query returned a row
  if (mysqli_num_rows($result) == 1) {
    // The login was successful
    $row = mysqli_fetch_assoc($result);
    $_SESSION['emailid'] = $emailid;
    $_SESSION['s_firstname'] = $row['firstname'];
    header('Location: ../admin\index.php');
  } else {
    // The login was unsuccessful
    header('Location: ../admin\message\invalid\invali.html');
  }
}
?>
