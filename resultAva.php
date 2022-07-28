<?php 
// Include the database configuration file  
require_once 'connection.php'; 
 session_start();

$user_id = $_SESSION['current_user_id'];

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         

            $insert = mysqli_query( $con, "INSERT INTO ava (ava, user_id) VALUES ('$imgContent', '$user_id')"); 
             
            if($insert){ 
                $status = 'success'; 
                $_SESSION['ava_change'] = "File uploaded successfully."; 
                header('location:profile_page.php');
            }else{ 
                $_SESSION['ava_change'] = "File upload failed, please try again.";
                header('location:profile_page.php'); 
            }  
        }else{ 
            $_SESSION['ava_change'] = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            header('location:profile_page.php'); 
        } 
    }else{ 
        $_SESSION['ava_change'] = 'Please select an image file to upload.';
        header('location:profile_page.php'); 
    } 
} 
 
?>