<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adding post</title>
	<link rel="stylesheet" href="./assets/css/addpost.css">
</head>
<style>
		form input{
		margin: 15px 0;
		padding: 10px;
		font-family: Inter;
		font-size: 15px;
		line-height: 15px;
		border: 1px solid #0088D4;
		border-radius: 5px;
	}
</style>
<body>
	<div class="container">
		<div class="post__content">
			<div style="width: 50px;"></div>
			<form action="addPostResult.php" method="POST">
				<p class="post__title">Add post</p>
				<hr>
				<textarea name="name" cols="60" placeholder="POST NAME:"></textarea>
				<textarea name="info" cols="60" rows="5" placeholder="ENTER INFO:"></textarea>
		        <input name="price" class="input" type="number" min="0" step="500" placeholder="ENTER PRICE ₸" ></input><br>
		        <select name="type">
					<option value="" disabled selected>Select type</option>
    				<option value="cafe" >Cafe</option>
    				<option value="fastfood"  >Fast-Food</option>
    				<option value="restaurant" >Restaurant</option>
    				<option value="park">Park</option>
    				<option value="mountain">Mountain</option>
    				<option value="beach">Beach</option>
    				<option value="mall">Mall</option>
    				<option value="sight">Sight, Monument</option>
    				<option value="hotel">Hotel</option>
   		 			<option value="hostel">Hostel</option>
				</select><br>
				<select name="location">
					<option value="" disabled selected>Select location</option>
    				<option value="Akmola Region">Akmola Region</option>
    				<option value="Aktobe Region">Aktobe Region</option>
    				<option value="Almaty">Almaty</option>
    				<option value="Almaty Region">Almaty Region</option>
    				<option value="Atyrau Region">Atyrau Region</option>
    				<option value="Baikonur">Baikonur</option>
    				<option value="East Kazakhstan Region">East Kazakhstan Region</option>
    				<option value="Jambyl Region">Jambyl Region</option>
    				<option value="Karaganda Region">Karaganda Region</option>
    				<option value="Kostanay Region">Kostanay Region</option>
    				<option value="Kyzylorda Region">Kyzylorda Region</option>
    				<option value="Mangystau Region">Mangystau Region</option>
    				<option value="North Kazakhstan Region">North Kazakhstan Region</option>
    				<option value="Nur-Sultan">Nur-Sultan</option>
    				<option value="Pavlodar Region">Pavlodar Region</option>
    				<option value="Turkestan Region">Turkestan Region</option>
    				<option value="West Kazakhstan Province">West Kazakhstan Province</option>
    			</select>
				<input type="submit" name="submit" class="add__btn" value="submit">
			</form>
		</div>
	</div>
	<?php
		session_start();
		error_reporting(E_ALL ^ E_WARNING);
	if ($_SESSION['empty_space'] == 'yes') {
   ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Fill empty fields");
        </script>
<?php
unset($_SESSION['empty_space'] );
}
?>
</body>
</html>