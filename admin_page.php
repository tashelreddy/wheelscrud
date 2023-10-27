<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>admin_page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<h1 class="title"> <span>admin</span> profile page </h1>

<section class="profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `account` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
   
   <div class="profile">
   <img src="assets/img/selby driving school.png" class="img" alt="Wheels Driving School">
      <h3><?= $fetch_profile['name']; ?></h3>
      <div class="date">
      <?php
      // Prints the day, date, month, year, time, AM or PM
      echo date("l jS \of F Y") . "<br>";
      date_default_timezone_set("America/New_York");
      echo "The time is " . date("h:i:sa");
      ?>
      </div>
      <a href="admin_profile_update.php" class="btn">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
      <div class="flex-btn">
         <a href="index.php" class="option-btn">login</a>
         <a href="register.php" class="option-btn">Register New</a>
         <a href="schedule.php" class="option-btn">View Calender</a>
         <a href="index.php" class="option-btn">Dashboard</a>
      </div>
   </div>

</section>

</body>
</html>

