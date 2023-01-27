<?php
include "myblood.php";
if (isset($_POST['signin'])) {

$Email = $_POST['email'];
$password = $_POST['pass'];
//$hashpassword = md5($password);

//to prevent from mysqli injection
      $username = stripcslashes($Email);
      $password = stripcslashes($password);
      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);

      $sql = "select * from user where user_email = '$username' and user_password = '$password'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1){
        header("Location: index-dummy.php?success=You has successfully login.");
      exit();
      }
      else{
          header("Location: logindummy.php?error=unknown error occurred&$user_data");
      }

/* $sql2 = "SELECT user_email, user_password FROM user ";
         $result2 = mysqli_query($con, $sql2);
         while($rowUser = mysqli_fetch_assoc($result2)){
            $username[] = $rowUser['user_email'];
            $pw[] = $rowUser['user_password'];
         }

         $query5 = "SELECT count(user_ID) AS total FROM user";
         $result5 = mysqli_query($con, $query5);
         $values = mysqli_fetch_assoc($result5);
         $num_user = $values['total'];

         for ($i=0; $i <$num_user; $i++) {
           if ($Email == $username[$i] && $hashpassword == $pw[$i]) {
             header("Location: user-hompage.php?success=You has successfully login.");
           exit();
         }else {
           //header("Location: Login.php?error=unknown error occurred&$user_data");
           echo "wrong";
           echo $Email;
        // exit();
         }
         }
*/


}
