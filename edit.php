<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $last_session = $_POST['last_session'];
    $status = $_POST['status'];

    $sql = "UPDATE `crud` SET `full_name`='$full_name',`address`='$address',`contact`='$contact',
    `email`='$email',`gender`='$gender',`course`='$course',`last_session`='$last_session',`status`='$status' WHERE id=$id";

     $result = mysqli_query($conn, $sql);

     if($result){
        header("Location:index.php?msg=Data updated successfully");
     }
     else{
        echo "Failed: " . mysqli_error($conn);
     }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <title>Dashboard</title>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="assets/img/wheels.png" style="width: 35px;" class="mx-1" alt="">
                </div>
                <div class="sidebar-brand-text mx-3"><sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
               Session Info
            </div>

           
            <!-- Nav Item - schedules -->
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-calendar-days"></i>
                    <span>Schedules</span></a>
            </li>

            <!-- Nav Item -  -->
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-users"></i>
                    <span>Employees</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fa-solid fa-message"></i>
                    <span>Messages</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">
                <i class="fa-solid fa-bookmark"></i>
                    <span>New Registrations</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="account.php">
                <i class="fa-solid fa-gear"></i>
                <span>Account</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Howard Selby</span>
                                <img src="assets/img/selby driving school.png" style="width: 35px;" class="mx-1" alt="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                   <!--main site-->
                   <div class="container">
                    <div class="text-center mb-4">
                        <h3>Update User Information<i class="fa-solid fa-pencil-square mx-1"></i></h3>
                    </div>

                    <?php
                    $sql = "SELECT * FROM  `crud`  WHERE id = $id LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>

                   <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;">
                     <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" 
                            value="<?php echo $row['full_name'] ?>">
                        </div>
                     </div>

                     <div class="mb-3">
                     <label class="form-label">Address</label>
                      <input type="address" class="form-control" name="address" 
                      value="<?php echo $row['address'] ?>">
                     </div>

                     <div class="mb-3">
                     <label class="form-label">Contact</label>
                      <input type="text" class="form-control" name="contact" 
                      value="<?php echo $row['contact'] ?>">
                     </div>

                     <div class="mb-3">
                     <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email"
                      value="<?php echo $row['email']?>">
                     </div>

                      <div class="form-group mb-3">
                    <label>Gender:</label> &nbsp;
                    <label for="male" class="form-input-label">Male</label>
                    <input type="radio" class="form-check-input active mx-1" name="gender" id="male" 
                    value="male" <?php echo ($row['gender']=='male')? "checked":"";?>>
                    &nbsp;
                    <label for="female" class="form-input-label mx-4">Female</label>
                    <input type="radio" class="form-check-input" name="gender" id="female" 
                    value="female" <?php echo ($row['gender']=='female')? "checked":"";?>>
                      </div>

                     <div class="mb-3">
                     <label class="form-label">Course</label>
                      <input type="text" class="form-control" name="course" 
                      value="<?php echo $row['course'] ?>">
                     </div>
                    

                     <div class="mb-3">
                     <label class="form-label">Last Session</label>
                      <input type="text" class="form-control" name="last_session" 
                      value="<?php echo $row['last_session'] ?>">
                     </div>

                     <div class="form-group mb-3">
                    <label>Status:</label> &nbsp;
                    <label for="active" class="form-input-label">Active</label>
                    <input type="radio" class="form-check-input active mx-1" name="status" id="active" 
                    value="active" <?php echo ($row['status']=='active')? "checked":"";?>>
                    &nbsp;
                    <label for="inactive" class="form-input-label mx-4">Inactive</label>
                    <input type="radio" class="form-check-input" name="status" id="inactive"
                     value="inactive" <?php echo ($row['status']=='inactive')? "checked":"";?>>
                      </div>

                     <div>
                        <button type="submit" class="btn btn-success bg-success text-white" 
                        name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger bg-danger text-white">Cancel</a>
                     </div>
                    </form>
                    </div>
                   </div>

    <!--main site-->

     <!-- Footer -->
     <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Wheels Driving School 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    
<!-- Boostrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>


</body>
</html>