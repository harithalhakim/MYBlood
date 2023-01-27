<?php
include "myblood.php";
if (isset($_POST['signup'])) {

$name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$password = $_POST['pass'];
$re_password = $_POST['re_pass'];

echo $name;
echo $Phone;
echo $Email;
echo $password;

if ($password != $re_password) {
  header("Location: registerdummy.php?error=Password is not correct");
  	    exit();
}

else {
  $sql2 = "INSERT INTO user(user_name, user_email, phone_no, user_password) VALUES('$name', '$Email', '$Phone', '$password ')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: logindummy.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: registerdummy.php?error=unknown error occurred&$user_data");
		        exit();
           }
}

}
