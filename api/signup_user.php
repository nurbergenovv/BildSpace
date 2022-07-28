<?php 

require('connection.php');
$user_fname = $_POST['user_fname'];
$user_lname = $_POST['user_lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['user_fname'];
$address = $_POST['user_fname'];
$type = $_POST['type'];

    function CheckPass( $passwordd ){
        if(!empty($passwordd)) {
        if (strlen($passwordd) < '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        } 
        else{
           $passwordErr = "no error"; 
        }
    }
    return $passwordErr;
    }

     
    if( !empty($user_lname) && !empty($user_fname) && !empty($address) && !empty($email) && !empty($password) && !empty($type)){
       $selectAcc = mysqli_query($con , "SELECT * FROM `user` WHERE email ='$email'");
       $passwordErr = CheckPass($password);
       if(mysqli_num_rows($selectAcc) == 1){
            echo "Such user already exists";
        }
       else{
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                $emailErr = "You Entered An Invalid Email Format";
                echo "Invalid email format";                  
            }
            if($passwordErr == "no error"){
                $query = "INSERT INTO user (user_fname, user_lname , email , password , bio , address , type)
                VALUES ('$user_fname' , '$user_lname', '$email' , '$password' , ' ', '$address' , '$type')";
                $result = mysqli_query($con , $query);
                if ($result) {
                    echo "Success";
                }
                
            }
            else{
              echo "Your Password Must Contain At Least 8 Characters!"; 
            }
        }
    }
    else{
        echo "Fill in empty fields";
    }
?> 