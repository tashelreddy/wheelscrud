<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['update'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   
   $update_profile = $conn->prepare("UPDATE `account` SET name = ?, email = ? WHERE id = ?");
   $update_profile->execute([$name, $email, $admin_id]);


   $old_pass = $_POST['old_pass'];
   $previous_pass = md5($_POST['previous_pass']);
   $previous_pass = filter_var($previous_pass, FILTER_SANITIZE_STRING);
   $new_pass = md5($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $confirm_pass = md5($_POST['confirm_pass']);
   $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);

   if(!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($previous_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password matched!';
      }else{
         $update_password = $conn->prepare("UPDATE `account` SET password = ? WHERE id = ?");
         $update_password->execute([$confirm_pass, $admin_id]);
         $message[] = 'password has been updated!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>admin profile update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<h1 class="title"> update <span>admin</span> profile </h1>

<section class="update-profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `account` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <form action="" method="post" enctype="multipart/form-data">
   <img src="assets/img/wheels.png" class="img" alt="Wheels Driving School">
      <div class="flex">
         <div class="inputBox">
            <span>username : </span>
            <input type="text" name="name" required class="box" placeholder="enter your name" value="<?= $fetch_profile['name']; ?>">
            <span>email : </span>
            <input type="email" name="email" required class="box" placeholder="enter your email" value="<?= $fetch_profile['email']; ?>">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?= $fetch_profile['password']; ?>">
            <span>old password :</span>
            <input type="password" class="box" name="previous_pass" placeholder="enter previous password" >
            <span>new password :</span>
            <input type="password" class="box" name="new_pass" placeholder="enter new password" >
            <span>confirm password :</span>
            <input type="password" class="box" name="confirm_pass" placeholder="confirm new password" >
         </div>
      </div>
      <div class="flex-btn">
         <input type="submit" value="update profile" name="update" class="btn">
         <a href="admin_page.php" class="option-btn">go back</a>
      </div>
   </form>

</section>

</body>
</html>