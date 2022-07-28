<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require('connection.php');

$query = "SELECT * from user";

$result = mysqli_query($con, $query);

if($result){
	$user_arr = array();
	$user_arr['data'] = array();

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