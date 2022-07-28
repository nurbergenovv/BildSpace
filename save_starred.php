<?php

     session_start();
     error_reporting(E_ALL ^ E_WARNING);
     require('connection.php');

	$user_id = $_SESSION['current_user_id'];
	$post_id = $_POST['post_id'];
  $checkStarred= mysqli_query($con , "SELECT * from starred WHERE user_id = '$user_id' AND post_id = '$post_id'");
  if (mysqli_num_rows($checkStarred) >=1 && isset($_POST['submit'])) {
       $_SESSION['save_starred'] = 'uzhe bar';
       $_SESSION['post_id'] = $post_id;
       header('location:product_detail.php');
  }
  else{

       $myPosts = mysqli_query($con , "INSERT INTO starred( user_id, post_id) VALUES ('$user_id' , '$post_id')");
       $_SESSION['save_starred'] = 'success';
       $_SESSION['post_id'] = $post_id;
       header('location:product_detail.php');
     
     }

?>