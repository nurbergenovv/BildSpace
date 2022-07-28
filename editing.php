<?php
session_start();
require('connection.php');
$submit = $_POST['submit'];
$name = $_POST['name'];
$info = $_POST['info'];
$price = $_POST['price'];
$type = $_POST['type'];
$address = $_POST['address'];
$postid = $_POST['post_id'];

 if (!empty($submit)) {
	$nice = mysqli_query($con, "UPDATE `post` SET `name` = '$name',  `info` = '$info', `price` = '$price' , `type` = '$type', `address` = '$address' WHERE post_id = '$postid' ");
	if($nice){
         $_SESSION['edited'] = 'edited';
       	header('location:profile_page.php');
	}
}
?>
