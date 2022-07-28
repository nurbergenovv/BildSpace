<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


require('connection.php');

$query = "SELECT * from post";
$result = mysqli_query($con, $query);

if($result){
	$post_arr = array();
	$post_arr['data'] = array();

	while ($row = $result->fetch_assoc()) {
		$post_id = $row['post_id'];
		$getImage1 = mysqli_query($con,  "SELECT `image` FROM post_image WHERE name = 'first' AND post_id = '$post_id'");
		$rowImage = mysqli_fetch_array($getImage1);
		$image = base64_encode($rowImage['image']);

		$post_item = array(
        	'post_id' => $row['post_id'],
        	'name' => $row['name'],
        	'info' => $row['info'],
        	'rating' => $row['rating'],
        	'price' => $row['price'],
        	'address' => $row['address'],
			'created_at' => $row['created_at'],
			'user_id' => $row['user_id'],
			'image' => $image
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