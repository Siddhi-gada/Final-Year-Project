<?php
 include '..\include\config.php';
 include '../../login\login.php';
 $emailid = (isset($_POST['emailid']) ? $_POST['emmailid'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');
 $admin_query = "SELECT * from register where emailid =  '$emailid' AND password = '$password'";
 $run = mysqli_query($con,$admin_query);     
 $rows = mysqli_num_rows($run);
 $data = mysqli_fetch_assoc($run);
 if($rows){
    $db_firstname = $data['firstname'];
    $_SESSION['s_firstname'] =  $db_firstname;
 }
?>
<style>
<?php include "../css/style.css";
include "../css/sb-admin-2.min.css";
?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Driver Details</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="student_style.css">

    <?php include('../assets\header-2.php')?>

<body id="page-top">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="../img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                        alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class=" drop-down ">
                        <!-- Nav Item - User Information -->
                        <?php 
                                    if (isset($_SESSION['s_firstname'])) {
                                        # code...
                                        ?>
                    <li class="drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

                                            if(isset($_SESSION['s_firstname']))
                                            echo ucfirst($_SESSION['s_firstname']); ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../profile_page\index.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="includes/logout.php"><i class="fa fa-fw fa-gear"></i> Profile Setting</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>

                    <?php    }?>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div id="display-image">
                    <?php
$conn=mysqli_connect("localhost","root","","ace_driving_school");
$id=$_GET["id"];
$res=mysqli_query($conn,"SELECT * FROM driver_register where id = $id");
echo "<table>";
while ($row=mysqli_fetch_array($res))
{
echo "<div class='container-1'>";
    echo "<div class='part-1'>";
        echo "<div>"; ?> <img class="image" src="<?php echo $row ["profileimage"]; ?>" height="250" width="250"> <?php echo "</td>";
        echo "</div>";
        echo "<div class='header'>";
            echo "<div class='profile-details'>Name:</div>";
            echo "<div class='profile-detail'>";
                echo $row["firstname"];    
            echo "</div>";
            echo "<div class='profile-detail-1'>";
                echo $row["middlename"];
            echo "</div>";    
            echo "<div class='profile-detail-1'>";
                echo $row["lastname"];
            echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "<div class='part-2'>";
        echo "<div class='part-1-2'>";
            echo "<div class='header-2'>Date of Birth:</div>";
                echo "<div class='header-3'>";
                    echo $row["dob"];
                echo "</div>"; 
        echo "</div>";      
        echo "<div class='part-1-2'>"; 
            echo "<div class='header-2'>Gender:</div>";
                echo "<div class='header-3'>";
                    echo $row["gender"];    
                echo "</div>";
            echo"</div>";          
        echo "<div class='part-1-2'>";                 
            echo "<div class='header-2'>Phone No:</div>";
                echo "<div class='header-3'>";
                    echo $row["phone"];    
            echo "</div>";   
        echo "</div>";  
        echo "<div class='part-1-2'>";        
            echo "<div class='header-2'>Email Id:</div>";
                echo "<div class='header-3'>";
                    echo $row["emailid"];    
            echo "</div>";     
        echo "</div>"; 
        echo "<div class='part-1-3'>";
            echo "<div class='header-2'>Do you have any work experience?  </div>";
            echo "<div class='header-3'>";
                    echo $row["workExperience"];
            echo"</div>";
        echo "</div>";      
        echo "<div class='part-1-3'>";            
            echo "<div class='header-2'>How many years of work experience do you have?  </div>";
            echo "<div class='header-3'>";
                echo $row["years"];
            echo "</div>";    
        echo "</div>";      
        echo "</div>";  
        echo "</div>";  
        echo "<div class='part-3'>";
            echo"<div class='part-1-4'>";  
                echo "<div>"; ?> <img class="image-1" src="<?php echo $row ["aadharcard"]; ?>" height="250" width="250"> <?php echo "</td>";
                echo"<div class='header-4'>Aadhar Card</div>";
                echo "</div>";
            echo"</div>";   
            echo"<div class='part-1-4'>";  
            echo "<div>"; ?> <img class="image-1" src="<?php echo $row ["pancard"]; ?>" height="250" width="250"> <?php echo "</td>";
            echo"<div class='header-4'>Pan Card</div>";
            echo "</div>";
        echo"</div>";   
        echo"<div class='part-1-4'>";  
        echo "<div>"; ?> <img class="image-1" src="<?php echo $row ["drivinglicense"]; ?>" height="250" width="250"> <?php echo "</td>";
        echo"<div class='header-4'>Driving License</div>";
        echo "</div>";
    echo"</div>";    
        echo "</div>";
        echo "<div class='header'>";

        echo "</div>";
    echo "</div>";
echo "</div>";
echo "</div>";
}
?>
<button id="accept" class="btn-1">Accept</button>
<button id="reject" class="btn-2">Reject</button>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Bootstrap core JavaScript-->
            <?php 
   include('../assets\script-2.php') ;
   include('../assets\footer.php');

   ?>
</body>

</html>