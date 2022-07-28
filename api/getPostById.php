<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require('connection.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
else{
	die();
}
$query = "SELECT * from post WHERE post_id = '$id'";
$result = mysqli_query($con, $query);

$num_rows = mysqli_num_rows($result);

if($num_rows >= 0){
	$post_arr = array();
	$post_arr['data'] = array();

	while ($row = $result->fetch_assoc()) {

		$post_item = array(
        	'post_id' => $row['post_id'],
        	'name' => $row['name'],
        	'info' => $row['info'],
        	'rating' => $row['rating'],
        	'price' => $row['price'],
        	'address' => $row['address'],
			'created_at' => $row['created_at'],
			'user_id' => $row['user_id']
		);
		array_push($post_arr['data'], $post_item);
	}

	echo json_encode($post_arr);
}
else{
   echo json_encode(
   	array('message'=> 'No Post Found'));
}



?>