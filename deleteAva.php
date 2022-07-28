
	<?php
      session_start();
      require('connection.php');
      error_reporting(E_ALL ^ E_WARNING);
      $acc = $_SESSION['current_user_id'];
       
      if (isset($_POST['setD'])) {
      	$querySet = mysqli_query($con, "DELETE FROM `ava` WHERE user_id = '$acc'");
      	if($querySet){
      		$_SESSION['setDefault'] = 'success';
      		header('location:change_ava.php');
      	}
      }

	?>