<?php
include "myblood.php";
if (isset($_POST['signin'])) {

$Email = $_POST['admin_email'];
$password = $_POST['admin_pass'];
//$hashpassword = md5($password);

//to prevent from mysqli injection
      $username = stripcslashes($Email);
      $password = stripcslashes($password);
      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);

      $sql = "select * from admin where admin_email = '$username' and admin_password = '$password'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1){
        header("Location: AdminDashboard.php?success=You has successfully login.");
      exit();
      }
      else{
          header("Location: AdminLogin.php?error=unknown error occurred&$user_data");
      }
}
