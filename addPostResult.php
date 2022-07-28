<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Adding post</title>
</head>
<body>

<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
date_default_timezone_set('GMT');
require('connection.php');

$name = $_POST['name'];
$info = $_POST['info'];
$price = $_POST['price'];
$type = $_POST['type'];
$address = $_POST['location'];
$submit = $_POST['submit'];
$user_id = $_SESSION['current_user_id'];
$created_at = date("F j, Y");

if (isset($submit) && !empty($name) && !empty($info) && !empty($price) && !empty($type) && !empty($type) && !empty($address)){
$query = mysqli_query($con, "INSERT INTO `post`( name, info, price, type, address , created_at , user_id) VALUES ('$name' ,'$info' , '$price' , '$type' , '$address' , '$created_at' , '$user_id')");
      if ($query) {
         $_SESSION['addpost'] = 'success';
         $_SESSION['post_name'] = $name;
         header('location:post_images.php');
         }
         else{
         $_SESSION['addpost'] = 'fail';
         header('location:profile_page.php');  
         }
 
} 
elseif(isset($submit) && empty($name) || empty($info) || empty($price) || empty($type) || empty($type) || empty($address)){
   $_SESSION['empty_space'] = 'yes';
   header('location:addPost.php');
} ?>
</body>
</html>