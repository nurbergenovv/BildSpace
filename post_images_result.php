<?php 
// Include the database configuration file  
require_once 'connection.php'; 
 session_start();

$user_id = $_SESSION['current_user_id'];
$name = $_SESSION['post_name'];
$getId = mysqli_query($con, "SELECT post_id FROM post WHERE name = '$name' AND user_id = '$user_id'");
$row = mysqli_fetch_array($getId);
$post_id = $row['post_id'];

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image1"]["name"]) && !empty($_FILES["image2"]["name"]) && !empty($_FILES["image3"]["name"])) { 
        $fileName1 = basename($_FILES["image1"]["name"]); 
        $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 

        $fileName2 = basename($_FILES["image2"]["name"]); 
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION); 

        $fileName3 = basename($_FILES["image3"]["name"]); 
        $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes) && in_array($fileType3, $allowTypes)){ 
            $image1 = $_FILES['image1']['tmp_name']; 
            $imgContent1 = addslashes(file_get_contents($image1)); 

            $image2 = $_FILES['image2']['tmp_name']; 
            $imgContent2 = addslashes(file_get_contents($image2));

            $image3 = $_FILES['image3']['tmp_name']; 
            $imgContent3 = addslashes(file_get_contents($image3));  

            $insert1 = mysqli_query( $con, "INSERT INTO post_image (image, name, post_id) VALUES ('$imgContent1', 'first' , '$post_id')");
            $insert2 = mysqli_query( $con, "INSERT INTO post_image (image, name, post_id) VALUES ('$imgContent2', 'second' , '$post_id')"); 
            $insert3 = mysqli_query( $con, "INSERT INTO post_image (image, name, post_id) VALUES ('$imgContent3', 'third' , '$post_id')"); 

             
            if($insert1 && $insert2 && $insert3){ 
                $_SESSION['post_image'] = "File uploaded successfully."; 
                header('location:profile_page.php');
            }else{ 
                $_SESSION['post_image'] = "File upload failed, please try again.";
                header('location:profile_page.php'); 
            }  
        }else{ 
            $_SESSION['post_image'] = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            header('location:profile_page.php'); 
        } 
    }else{ 
        $_SESSION['post_image'] = 'Please select an image file to upload.';
        header('location:profile_page.php'); 
    } 
} 
 
?>