<?php
     session_start();
     error_reporting(E_ALL ^ E_WARNING);
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="shortcut icon" href="./assets/images/logo/bildspace_favicon.png" type="image/x-icon">
    <title>BildSpace - Registration</title>
</head>
<body>

    <div class="container">
        <div class="signin-signup">
            <form action="signin.php" method="POST" class="sign-in-form">
                <h2 class="title">Sign In</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Your email">
                </div>
                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="login" value="Login" class="btn">
                <a href="" class="social-text">Forgot password?</a>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="signup.php" method="POST" class="sign-up-form">
                <h2 class="title">Sign Up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_fname" placeholder="What is your first name?">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user_lname" placeholder="What is your last name?">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Your email">
                </div>
                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
<!--- Kazakhstan states -->

<select class = "input-field" name="address">
         <i class="fas fa-user"></i>
    <option class="address" value="" disabled selected>Where do you live?</option>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS">Kostanay Region</option>
    <option value="KZY">Kyzylorda Region</option>
    <option value="MAN">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
</select>

<select class="input-field" name="type">
    <option value="business_acc">Business account</option>
    <option value="traveller_acc">Traveller account</option>
</select>
                <input type="submit" name="signup" value="Sign Up" class="btn">
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign up</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Are you oldschool?</h3>
                    <p>Login to our platform to Discover Our Kazakhstan with us!</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="./assets/images/signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>It seems you are new here!</h3>
                    <p ><span class="typing"></span></p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="./assets/images/signup.svg" alt="" class="image">
            </div>
        </div>     
    </div>
    <script src="./assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed = new Typed(".typing", {
                strings: ["Sign Up now!" , "Discover Kazakhstan with us" ],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true     
            })
        </script>
    <?php
      if($_SESSION['status'] == 'success'){
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
               title: "Welcome!",
               text: "You've registred succesfully!\n Now let's login",
               icon: "success",
              });
        </script>
        <?php
        unset($_SESSION['status']);
       }
       elseif($_SESSION['status'] == 'fail'){
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
               title: "OOPS...",
               text: "Such account already exists!",
               icon: "error",
              });
        </script>
     <?php
     unset($_SESSION['status']);
       }
      if($_SESSION['check'] == 'empty'){
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
               title: "WARNING",
               text: "Fill in empty fields",
               icon: "warning",
              });
        </script>
     <?php
     unset($_SESSION['check']);
       } 
     if($_SESSION['password_check'] == 'error'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
               title: "OOPS...",
               text: "<?php echo $_SESSION['password_error_type'];  ?>",
               icon: "error",
              });
        </script>
     <?php
     unset($_SESSION['password_check']);
     unset($_SESSION['password_error_type']);
       }
        if($_SESSION['email_check'] == 'error'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
               title: "OOPS...",
               text: "Invalid email format",
               icon: "error",
              });
        </script>
     <?php
     unset($_SESSION['email_check']);
       }
       if($_SESSION['login_errors'] == 'error'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Wrong email/password");
        </script>
     <?php
     unset($_SESSION['login_errors']);
       }
?>
</body>
</html>