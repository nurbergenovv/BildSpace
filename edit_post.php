<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESULT</title>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;700&display=swap');

	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	img{
		max-width: 100%;
	}
	body{
		font-family: 'Montserrat', sans-serif;
		font-family: 'Inter', sans-serif;
		font-weight: 400;
	}
	.container{
		max-width: 1390px;
		margin: 0 auto;
		padding: 0px 15px;
	}

	.post__content{
		padding-top: 50px;
		display: flex;
	}
	form{
		width: 100%;
		display: flex;
		justify-content: center;
		flex-direction: column;
		padding: 0px 200px;
	}
	form textarea{
		margin: 15px 0;
		padding: 10px;
		font-family: Inter;
		font-size: 15px;
		line-height: 15px;
		border: 1px solid #0088D4;
		border-radius: 5px;
	}
	form input{
		margin: 15px 0;
		padding: 10px;
		font-family: Inter;
		font-size: 15px;
		line-height: 15px;
		border: 1px solid #0088D4;
		border-radius: 5px;
	}
	form select{
		font-family: Inter;
		font-size: 15px;
		line-height: 15px;
		text-transform: uppercase;
		color: #393939;
		border: 1px solid #0088D4;
	}
	.post__title{
		font-family: Inter;
		font-weight: bold;
		font-size: 48px;
		line-height: 102.4%;
		color: #393939;
	}
	.edit__btn{
		font-family: Montserrat;
		font-weight: bold;
		font-size: 19px;
		line-height: 21px;
		text-align: center;
		text-transform: uppercase;
		color: #FFFFFF;

		width: 360px;
		height: 65px;
		left: 510px;
		top: 595px;
		border: #0088D4;
		background: #0088D4;
		cursor: pointer;
	}
</style>
<body>
	<?php

session_start();
require('connection.php');

$postid = $_POST['post_id'];
$_SESSION['editing_post_id'] = $postid;
if ( isset($postid)) {

$out = mysqli_query($con , "SELECT * FROM `post` WHERE post_id = '$postid'");
$row = mysqli_fetch_array($out)
?>
	<div class="container">
		<div class="post__content">
			<form action="editing.php" method="post">
				<div style="text-align: center;"><p class="post__title">Edit Post</p></div>
		Enter name:<br>
		<textarea name="name" cols="60"  value = "<?php echo $row['name'] ?>" ><?php echo $row['name'] ?></textarea><br>
        Enter info:<br>
		<textarea name="info" value = "<?php echo $row['info'] ?>"  rows="10"><?php echo $row['info'] ?></textarea><br>
		Enter price ₸:<br>
		<input name="price" type="number" min="500" step="500" value = "<?php echo $row['price'] ?>" ></input><br>
		<input type="hidden" name="post_id" value="<?php echo $postid; ?>">
		Enter type:<br>
		<select name="type" value = "<?php echo $row['type'] ?>">
			<?php
             if ($row['type'] == 'cafe') {?>
    		<option value="cafe" selected="selected">Cafe</option>
    		<option value="fastfood">Fast-Food</option>
    		<option value="restaurant">Restaurant</option>
    		<option value="park">Park</option>
    		<option value="mountain">Mountain</option>
    		<option value="beach">Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'fastfood') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood" selected="selected" >Fast-Food</option>
    		<option value="restaurant">Restaurant</option>
    		<option value="park">Park</option>
    		<option value="mountain">Mountain</option>
    		<option value="beach">Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'restaurant') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" selected="selected">Restaurant</option>
    		<option value="park">Park</option>
    		<option value="mountain">Mountain</option>
    		<option value="beach">Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }                           
             elseif ($row['type'] == 'park') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" selected="selected">Park</option>
    		<option value="mountain">Mountain</option>
    		<option value="beach">Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'mountain') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" selected="selected">Mountain</option>
    		<option value="beach">Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'beach') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" >Mountain</option>
    		<option value="beach" selected="selected" >Beach</option>
    		<option value="mall">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'mall') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" >Mountain</option>
    		<option value="beach" >Beach</option>
    		<option value="mall" selected="selected">Mall</option>
    		<option value="sight">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'sight') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" >Mountain</option>
    		<option value="beach" >Beach</option>
    		<option value="mall" >Mall</option>
    		<option value="sight" selected="selected">Sight, Monument</option>
    		<option value="hotel">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'hotel') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" >Mountain</option>
    		<option value="beach" >Beach</option>
    		<option value="mall" >Mall</option>
    		<option value="sight" >Sight, Monument</option>
    		<option value="hotel" selected="selected">Hotel</option>
   		 	<option value="hostel">Hostel</option>
			<?php
             }
             elseif ($row['type'] == 'hostel') {?>
    		<option value="cafe" >Cafe</option>
    		<option value="fastfood"  >Fast-Food</option>
    		<option value="restaurant" >Restaurant</option>
    		<option value="park" >Park</option>
    		<option value="mountain" >Mountain</option>
    		<option value="beach" >Beach</option>
    		<option value="mall" >Mall</option>
    		<option value="sight" >Sight, Monument</option>
    		<option value="hotel" >Hotel</option>
   		 	<option value="hostel" selected="selected">Hostel</option>
			<?php
             }
         ?>
		</select><br><br>
		Choose address:<br>
		<select name="address" value = "<?php echo $row['address'] ?>">

			<?php
             if ($row['address'] == 'Akmola Region') {?>
             <option selected="selected" value="Akmola Region">Akmola Region</option>
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
			<?php
             }
             elseif ($row['address'] == 'Aktobe Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region" selected="selected">Aktobe Region</option>
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
			<?php
             }
             elseif ($row['address'] == 'Almaty') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty" selected="selected">Almaty</option>
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
			<?php
             }
             elseif ($row['address'] == 'Almaty Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region" selected="selected">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['p_lang'] == 'Atyrau Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region" selected="selected">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'Baikonur') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur" selected = "selected">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'East Kazakhstan Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region" selected="selected">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'Jambyl Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region" selected="selected">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-SultanNur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'Karaganda Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region" selected="selected">Karaganda Region</option>
    <option value="Kostanay Region">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-SultanNur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'Kostanay Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" selected="selected">Kostanay Region</option>
    <option value="Kyzylorda Region">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-SultanNur-SultanNur-SultanNur-SultanNur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
             }
             elseif ($row['address'] == 'Kyzylorda Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  selected="selected">Kyzylorda Region</option>
    <option value="Mangystau Region">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
			}
elseif ($row['address'] == 'Mangystau Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" selected="selected">Mangystau Region</option>
    <option value="North Kazakhstan Region">North Kazakhstan Region</option>
    <option value="Nur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
			}elseif ($row['address'] == 'North Kazakhstan Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" >Mangystau Region</option>
    <option value="North Kazakhstan Region" selected="selected">North Kazakhstan Region</option>
    <option value="Nur-Sultan">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
			<?php
			}elseif ($row['address'] == 'Nur-Sultan') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" >Mangystau Region</option>
    <option value="North Kazakhstan Region" >North Kazakhstan Region</option>
    <option value="Nur-Sultan" selected="selected">Nur-Sultan</option>
    <option value="Pavlodar Region">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
    <?php
			}elseif ($row['address'] == 'Pavlodar Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" >Mangystau Region</option>
    <option value="North Kazakhstan Region" >North Kazakhstan Region</option>
    <option value="Nur-Sultan" >Nur-Sultan</option>
    <option value="Pavlodar Region" selected="selected">Pavlodar Region</option>
    <option value="Turkestan Region">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
        <?php
			}elseif ($row['address'] == 'Turkestan Region') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" >Mangystau Region</option>
    <option value="North Kazakhstan Region" >North Kazakhstan Region</option>
    <option value="Nur-SultanNur-Sultan" >Nur-Sultan</option>
    <option value="Pavlodar Region" >Pavlodar Region</option>
    <option value="Turkestan Region" selected="selected">Turkestan Region</option>
    <option value="West Kazakhstan Province">West Kazakhstan Province</option>
            <?php
			}elseif ($row['address'] == 'West Kazakhstan Province') {?>
    <option value="Akmola Region">Akmola Region</option>
    <option value="Aktobe Region">Aktobe Region</option>
    <option value="Almaty">Almaty</option>
    <option value="Almaty Region">Almaty Region</option>
    <option value="Atyrau Region">Atyrau Region</option>
    <option value="Baikonur">Baikonur</option>
    <option value="East Kazakhstan Region">East Kazakhstan Region</option>
    <option value="Jambyl Region">Jambyl Region</option>
    <option value="Karaganda Region">Karaganda Region</option>
    <option value="Kostanay Region" >Kostanay Region</option>
    <option value="Kyzylorda Region"  >Kyzylorda Region</option>
    <option value="Mangystau Region" >Mangystau Region</option>
    <option value="North Kazakhstan Region" >North Kazakhstan Region</option>
    <option value="Nur-SultanNur-Sultan" >Nur-Sultan</option>
    <option value="Pavlodar Region" >Pavlodar Region</option>
    <option value="Turkestan Region" >Turkestan Region</option>
    <option value="West Kazakhstan Province" selected="selected">West Kazakhstan Province</option>
    <?php }?>

		</select><br><br>
		<div style="text-align: center; margin-bottom: 10px;"><input type="submit" class="edit__btn" name="submit" value="submit"></div>

	</form>
		</div>
	</div>
	<?php }
	?>
</body>
</html>