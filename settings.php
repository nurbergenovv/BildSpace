<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="./assets/css/settings.css">
    <link rel="stylesheet" href="./assets/css/normalize_settings.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<?php

        session_start();
        require('connection.php');
      error_reporting(E_ALL ^ E_WARNING);
                    $user_id = $_SESSION['current_user_id'];

       $getAva = mysqli_query($con,  "SELECT `ava` FROM `ava` WHERE user_id = '$user_id'");
        $row = mysqli_fetch_array($getAva);
        if (empty($row)) {
          $src = "./assets/images/icons/ava.png";
        }
        else{
        $user_ava = $row['ava'];
      }

?>
<body>
<div class="wrapper">

    <nav class="nav">
        <ul class="nav__list" role="menubar">
          <li class="nav__item">    
            <a
              href="profile_page.php"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Home"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item">
            <a
              href="starred.php"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Favorite projects"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item nav__item--isActive">
            <a
              href="settings.php"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Informational messages"
              ><svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M12,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,12,8Zm0-6A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"
                />
              </svg>
            </a>
          </li>
         
        
        </ul>
      </nav>
<main class="main">
    <header class="header">
        <div class="header__wrapper">
        </div>
      </header>
    <section class="section">
        <header class="section__header">
            <h2 class="title">Settings</h2>
          </header>
          <div class="profile-icon">
              <a href="change_ava.php"><i class="fas fa-cloud-upload-alt"></i></a>
          </div>
        <div class="signin-signup">
            <div class="profile-main" width="400px" height="400px">
                <button
                  class="profile-main__setting focus--box-shadow"
                  type="button"
                >
              <?php  if (!empty($src)) {
                ?>
                <img class="profile-main__photo" src="./assets/images/icons/ava.png" alt="">
                <?php
             } 
             else{
             ?>
            <img class="profile-main__photo" width="20%"height="0%" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user_ava); ?>" />
          <?php } ?>
                </button>
              </div>

              <?php 
              


              $getfname = mysqli_query($con,  "SELECT `user_fname` FROM `user` WHERE user_id = $user_id");
        $row = mysqli_fetch_array($getfname);
        $user_fname = $row['user_fname']; 

        $getlname = mysqli_query($con,  "SELECT `user_lname` FROM `user` WHERE user_id = $user_id");
        $row = mysqli_fetch_array($getlname);
        $user_lname = $row['user_lname']; 
          $getAddress = mysqli_query($con,  "SELECT `address` FROM `user` WHERE user_id = $user_id");
        $row = mysqli_fetch_array($getAddress);
        $address =  $row['address'];
              ?>

        <form action="settings.php" method="POST" class="sign-in-form">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" value="<?php echo $user_fname;?>" placeholder="<?php echo $user_fname;?>">
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" value="<?php echo $user_lname;?>" placeholder="<?php echo $user_lname;?>">
            </div>
            <div class="input-field">
                    <select name="address" style="width: 100%" value = "<?php echo $address ?> " placeholder ="<?php echo $address ?>">

      <?php
             if ($address == 'AKM') {?>
             <option selected="selected" value="AKM">Akmola Region</option>
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
      <?php
             }
             elseif ($address == 'AKT') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT" selected="selected">Aktobe Region</option>
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
      <?php
             }
             elseif ($address == 'ALA') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA" selected="selected">Almaty</option>
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
      <?php
             }
             elseif ($address == 'ALM') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM" selected="selected">Almaty Region</option>
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
      <?php
             }
             elseif ($row['p_lang'] == 'ATY') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY" selected="selected">Atyrau Region</option>
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
      <?php
             }
             elseif ($address == 'BAY') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY" selected = "selected">Baikonur</option>
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
      <?php
             }
             elseif ($address == 'VOS') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS" selected="selected">East Kazakhstan Region</option>
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
      <?php
             }
             elseif ($address == 'ZHA') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA" selected="selected">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS">Kostanay Region</option>
    <option value="KZY">Kyzylorda Region</option>
    <option value="MAN">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
             }
             elseif ($address == 'KAR') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR" selected="selected">Karaganda Region</option>
    <option value="KUS">Kostanay Region</option>
    <option value="KZY">Kyzylorda Region</option>
    <option value="MAN">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
             }
             elseif ($address == 'KUS') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" selected="selected">Kostanay Region</option>
    <option value="KZY">Kyzylorda Region</option>
    <option value="MAN">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
             }
             elseif ($address == 'KZY') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  selected="selected">Kyzylorda Region</option>
    <option value="MAN">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
      }
elseif ($address == 'MAN') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" selected="selected">Mangystau Region</option>
    <option value="SEV">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
      }elseif ($address == 'SEV') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" >Mangystau Region</option>
    <option value="SEV" selected="selected">North Kazakhstan Region</option>
    <option value="AST">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
      <?php
      }elseif ($address == 'AST') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" >Mangystau Region</option>
    <option value="SEV" >North Kazakhstan Region</option>
    <option value="AST" selected="selected">Nur-Sultan</option>
    <option value="PAV">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
    <?php
      }elseif ($address == 'PAV') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" >Mangystau Region</option>
    <option value="SEV" >North Kazakhstan Region</option>
    <option value="AST" >Nur-Sultan</option>
    <option value="PAV" selected="selected">Pavlodar Region</option>
    <option value="YUZ">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
        <?php
      }elseif ($address == 'YUZ') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" >Mangystau Region</option>
    <option value="SEV" >North Kazakhstan Region</option>
    <option value="AST" >Nur-Sultan</option>
    <option value="PAV" >Pavlodar Region</option>
    <option value="YUZ" selected="selected">Turkestan Region</option>
    <option value="ZAP">West Kazakhstan Province</option>
            <?php
      }elseif ($address == 'ZAP') {?>
    <option value="AKM">Akmola Region</option>
    <option value="AKT">Aktobe Region</option>
    <option value="ALA">Almaty</option>
    <option value="ALM">Almaty Region</option>
    <option value="ATY">Atyrau Region</option>
    <option value="BAY">Baikonur</option>
    <option value="VOS">East Kazakhstan Region</option>
    <option value="ZHA">Jambyl Region</option>
    <option value="KAR">Karaganda Region</option>
    <option value="KUS" >Kostanay Region</option>
    <option value="KZY"  >Kyzylorda Region</option>
    <option value="MAN" >Mangystau Region</option>
    <option value="SEV" >North Kazakhstan Region</option>
    <option value="AST" >Nur-Sultan</option>
    <option value="PAV" >Pavlodar Region</option>
    <option value="YUZ" >Turkestan Region</option>
    <option value="ZAP" selected="selected">West Kazakhstan Province</option>
    <?php }?>

    </select>
            </div>
                    <input type="submit" name="submit" value="Save" class="btn">
        </form>

    </div>
    <a href="functions.php?logout=true"><input type="submit" value="Log Out" class="btn2"></a>
    <input type="submit" value="Delete Account" class="btn3">
</section>

</main>

</div>
</body>
</html>


<?php 

if (isset($_POST['submit'])) {
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $address = $_POST['address'];

  $updateUser = mysqli_query($con, "UPDATE user SET user_fname = '$fname', user_lname = '$lname', address = '$address' WHERE user_id = '$user_id'");
  if ($updateUser) {
    ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Account updated successfully");
        </script>
        <?php 
  }
}


?>