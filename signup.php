<?php

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address']; 
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $driving_experience = $_POST['driving_experience'];

    $sql = "INSERT INTO `users`(`id`, `full_name`, `email`, `address`, `contact`, `gender`, `driving_experience`)
          VALUES (NULL,'$full_name','$email','$address','$contact','$gender','$driving_experience')";

     $result = mysqli_query($conn, $sql);
     if($result){
        header("Location:signup.php?msg=New client added successfully");
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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

            <!-- Nav Item - employees -->
            <li class="nav-item">
                <a class="nav-link" href="#">
               
            <span></span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tashel Reddy</span>
                                <img src="assets/img/selby driving school.png" style="width: 35px;" class="mx-1" alt="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin.php" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fa-solid fa-calendar-days"></i> Bookings</a>
                    </div>
                <!--main site-->
          <main id="site-main">
        <div class="container">

        <?php
        if(isset($_GET['msg'])){
            $msg =$_GET['msg'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

        <div class="box-nav d-flex justify-between">
            <a href="#" class="btn btn-success bg-success mb-5">
            <span class="text-white"><i class="fa-solid fa-user-plus"></i></span>
            </a>
            <table class="table table-hover table-bordered text-center">
           <thead class="table-dark">
           <tr>
             <th scope="col">ID</th>
             <th scope="col">Full Name</th>
             <th scope="col">Email</th>
             <th scope="col">Address</th>
             <th scope="col">Contact</th>
             <th scope="col">Gender</th>
             <th scope="col">Driving experience</th>
             <th scope="col">Action</th>
            </tr>
             </thead>
             <tbody>
                <?php

                include "db_conn.php";

                $sql = "SELECT * FROM  `users`";
                $result = mysqli_query($conn, $sql );
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
            <tr>
                <td><?php echo $row['id']   ?></td>
                <td><?php echo $row['full_name']   ?></td>
                <td><?php echo $row['email']   ?></td>
                <td><?php echo $row['address']   ?></td>
                <td><?php echo $row['contact']   ?></td>
                <td><?php echo $row['gender']   ?></td>
                <td><?php echo $row['driving_experience']  ?></td>
              
               
                <td>
                <a href="remove.php?id=<?php  echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 me-3"></i></a>
            </td>
            </tr>               
            <?php


            }
                
          ?>

       </tbody>
      </table>
</div>
    
<!--/main site-->

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Wheels Driving School 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
           
<!-- Back to top button -->
<button
        type="button"
        class="btn btn-warning bg-warning btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

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


<script>
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


</body>
</html>