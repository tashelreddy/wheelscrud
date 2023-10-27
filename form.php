<?php
include "db_conn.php";

if(isset($_POST['submit'])){
$full_name = $_POST["full_name"];
$email = $_POST['email'];
$address = $_POST['address']; 
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$driving_experience = $_POST['driving_experience'];


    $sql = "INSERT INTO `users` (`id`,`full_name`, `email`, `address`, `contact`, `gender`, `driving_experience`)
    VALUES(NULL, '$full_name','$email','$address','$contact','$gender','$driving_experience')";   


     $result = mysqli_query($conn, $sql);
     if($result){
        header("Location:form.php?msg=Thank you! We will contact you shortly!");
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
    <title>Form_Signup</title>
    <script src="https://kit.fontawesome.com/8a92b09964.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/form.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="//code.jivosite.com/widget/KWAj7pTxqQ" async></script>

</head>
<body>
  
<header class="p-3 bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="home_page.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
      <img src="assets/img/wheels.png" class="rounded mx-5 d-block" style="width: 50px; ;" alt="Wheels Driving School">
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <li class="nav-item"><a href="home_page.php" class="nav-link link-light px-1 active" aria-current="page">Home</a></li> 
        <li class="nav-item"><a href="#courses" class="nav-link link-light px-1">Courses</a></li>
        <li class="nav-item"><a href="faq.php" class="nav-link link-light px-1">FAQs</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link link-light px-1">Contact</a></li>
        <li class="nav-item"><a href="#review" class="nav-link link-light px-1">Reviews</a></li>
        <li class="nav-item"><a href="#about" class="nav-link link-light px-1">About</a></li>
      </ul>

      <div class="text-end">
        <a href="form.php"><button type="button" class="btn btn-outline-success me-2">Register</button></a>
        <a href="schedule.php"><button type="button" class="btn btn-outline-warning">Book Session</button></a>
      </div>
    </div>
  </div>
</header>
</main>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/intersections.jpg"
                alt="intersectional road" class="img-fluid mt-5"
                style="border-top-left-radius: .50rem; border-bottom-left-radius: .50rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-3 text-uppercase text-center text-success">Student registration form</h3>
       <!-- Begin Page Content -->
       <div class="container-fluid">

<!--main site-->
<div class="container">
 <div class="text-center mb-4">
     <p class="text-muted">Complete the form below to register your first session <i class="fa fa-car"></i></p>
 </div>

<div class="container d-flex justify-content-center">
 <form action=""method="post" style="width:50vw; min-width:300px;">
  <div class="row mb-3">
     <div class="col">
         <label class="form-label">Full Name</label>
         <input type="text" class="form-control" name="full_name">
     </div>
  </div>

  <div class="mb-3">
  <label class="form-label">Address</label>
   <input type="address" class="form-control" name="address" placeholder="city">
  </div>

  <div class="mb-3">
  <label class="form-label">Contact</label>
   <input type="text" class="form-control" name="contact" placeholder="phone">
  </div>

  <div class="mb-3">
  <label class="form-label">Email</label>
   <input type="email" class="form-control" name="email"
    placeholder="someone@example.com">
  </div>

   <div class="form-group mb-3">
 <label>Gender:</label> &nbsp;
 <label for="male" class="form-input-label">Male</label>
 <input type="radio" class="form-check-input active" name="gender" id="male" value="male">
 &nbsp;
 <label for="female" class="form-input-label">Female</label>
 <input type="radio" class="form-check-input" name="gender" id="female" value="female">
   </div>

  <div class="form-group mb-3">
  <label>Driving Experience:</label>
 <label for="beginner" class="form-input-label">Beginner</label>
 <input type="radio" class="form-check-input active " name="driving_experience" id="beginner" value="beginner">
 <label for="intermediate" class="form-input-label">Intermediate</label>
 <input type="radio" class="form-check-input" name="driving_experience" id="intermediate" value="intermediate">
 <label for="refresher" class="form-input-label">Refresher</label>
 <input type="radio" class="form-check-input" name="driving_experience" id="refresher" value="refresher">
   </div>

  <div>
     <button type="submit" class="btn btn-success bg-success text-white" name="submit"><i class="fa fa-car"></i> Submit</button>
     <a href="home_page.php" class="btn btn-danger bg-danger text-white"><i class="fa fa-house"></i> Home</a>
  </div>

 </form>
 </div>
</div>

<!--main site-->


          <div class="panel-footer text-right">
            <small>&copy; Tashel.Dev</small>
          </div>
        </div>
      </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      
</body>
</html>

   