
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel='stylesheet' href="style.css" />
    <title>Update</title>

</head>

<body>
    <div class="container">
        <div class="column1">
            <form class="form-container" onsubmit="return validateForm()" action="connect.php" method="post"id="form">
                <h2>Course Update</h2>
                <?php 
                if($_GET['id']){
                    $conn = mysqli_connect('localhost', 'root', '', 'ace_driving_school');
                    $id=mysqli_real_escape_string($conn,$_GET['id']);
                    $query ="SELECT * FROM courses WHERE id='$id'";
                    $query_run = mysqli_query($conn, $query);
                    if (!$query_run) {
                        echo "Error: " . mysqli_error($conn);
                    }
                    $row = mysqli_fetch_array($query_run);
                }?> 
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-control">
                    <label for='title'>Title</label>
                    <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control" id="title" placeholder="Enter first name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for=''>Description</label>
                    <input type="text"name="description" class="form-control"value="<?php echo $row['description'];?>"  id="description" placeholder="Enter middle name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='Fees'>Fees</label>
                    <input type="text"name="Fees" class="form-control"value="<?php echo $row['Fees'];?>"  id="Fees" placeholder="Enter last name">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='start_date'>Start Date</label>
                    <input type="date" name="start_date" id="start_date" value="<?php echo $row['start_date'];?>"  placeholder="Enter email">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for='end_date'>End Date</label>
                    <input type="date" name="end_date" value="<?php echo $row['end_date'];?>" class="form-control" id="password" placeholder="Enter password">
                    <small>Error message</small>
                </div>
                <button id="Update"  name="send"class="btn btn-primary btn-block">Update</button>
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

<script src="update_script.js"></script>