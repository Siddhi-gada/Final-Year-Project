<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' href="deletestyle.css" />
    <title>Delete</title>

</head>

<body>
    <div class="container">
        <div class="column1">
            <form class="form-container" action="connect.php" method="post"id="form">
                <h2>Delete</h2>
                <?php 
                if($_GET['id']){
                    $conn = mysqli_connect('localhost', 'root', '', 'ace_driving_school');
                    $id=mysqli_real_escape_string($conn,$_GET['id']);
                    $query ="SELECT * FROM student_register WHERE id='$id'";
                    $query_run = mysqli_query($conn, $query);
                    if (!$query_run) {
                        echo "Error: " . mysqli_error($conn);
                    }

                    print_r($id);
                    $row = mysqli_fetch_array($query_run);
                }?> 
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-control">
                    <label for='Inputfirstname'>First name</label>
                    <input type="text" name="firstname" value="<?php echo $row['firstname'];?>" class="form-control" id="firstname" placeholder="Enter first name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='Inputmiddlename'>Middle name</label>
                    <input type="text"name="middlename" class="form-control"value="<?php echo $row['middlename'];?>"  id="middlename" placeholder="Enter middle name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='lastname'>Last name</label>
                    <input type="text"name="lastname" class="form-control"value="<?php echo $row['lastname'];?>"  id="lastname" placeholder="Enter last name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='phone'>Phone Number</label>
                    <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="phone"class="form-control" value="<?php echo $row['phone'];?>"  id="phone" placeholder="Enter Phone Number">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='email'>Email</label>
                    <input type="text" name="emailid" id="emailid" value="<?php echo $row['emailid'];?>"  placeholder="Enter email">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='password'>Password</label>
                    <input type="password" name="password" value="<?php echo $row['password'];?>" class="form-control" id="password" placeholder="Enter password">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='address'>Address</label>
                    <input type="txt" name="address" value="<?php echo $row['address'];?>" class="form-control"id="address" placeholder="Enter Address">
                    <small>Error message</small>
                </div>
                <button id="delete" name="send"class="btn btn-primary btn-block">Delete</button>
                <div class="form-footer">

                </div>
            </form>
        </div>
        <div class="column2">

            <img src="../../image\Update_Page_Photo.png" alt="pablo-sign-up" border="0"
                class='signup-image'>
        </div>

    </div>
</body>

</html>

<script src="script.js"></script>