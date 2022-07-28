 <?php

session_start();
require('connection.php');

if(!empty($_GET['logout'])){
unset($_SESSION['current_user_email']);
unset($_SESSION['current_user_password']);
unset($_SESSION['current_user_id']);
header('location:index.php');
}

if(!empty($_GET['get_premium'])){
 $user = $_SESSION['current_user_email'];
 $query = "UPDATE user SET type = 'business_acc' WHERE email = '$user'";
 $result = mysqli_query($con, $query);
 if ($result) {
 	$_SESSION['change_user_type'] = "success";
 	header('location:profile_page.php');
 }
}
?>