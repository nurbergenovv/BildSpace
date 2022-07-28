<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require('connection.php');

	$email = $_GET['email'];
	$password = $_GET['password'];

$query = "SELECT * from user WHERE email = '$email' AND password='$password'";
$result = mysqli_query($con, $query);

$num_rows = mysqli_num_rows($result);

if($num_rows >= 0){
	$user_arr = array();
	$user_arr['data'] = array();
   echo "user signed in";
	while ($row = $result->fetch_assoc()) {

		$user_item = array(
        	'user_id' => $row['user_id'],
        	'user_fname' => $row['user_fname'],
        	'user_lname' => $row['user_lname'],
        	'email' => $row['email'],
        	'password' => $row['password'],
        	'bio' => $row['bio'],
        	'address' => $row['address'],
			'type' => $row['type'] 
		);
		array_push($user_arr['data'], $user_item);
	}

	echo json_encode($user_arr);
}
else{
   echo json_encode(
   	array('message'=> 'No User Found'));
}


?>