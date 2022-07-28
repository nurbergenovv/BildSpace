<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="./assets/css/product_detail.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<?php
     session_start();
     error_reporting(E_ALL ^ E_WARNING);
     require('connection.php');
      $post_id = $_GET['id'];
     if (isset($_SESSION['post_id'])) {
       $post_id = $_SESSION['post_id'];
     }

      $getImage1 = mysqli_query($con,  "SELECT image FROM post_image WHERE name = 'first' AND post_id = '$post_id'");
      $row = mysqli_fetch_array($getImage1);
      $image1 = $row['image'];
      $getImage2 = mysqli_query($con,  "SELECT image FROM post_image WHERE name = 'second' AND post_id = '$post_id'");
      $row = mysqli_fetch_array($getImage2);
      $image2 = $row['image'];
      $getImage3 = mysqli_query($con,  "SELECT image FROM post_image WHERE name = 'third' AND post_id = '$post_id'");
      $row = mysqli_fetch_array($getImage3);
      $image3 = $row['image'];

     $user_id = $_SESSION['current_user_id'];

     if (isset($_POST['submit'])) {
       $myPosts = mysqli_query($con , "INSERT INTO starred( user_id, post_id) VALUES ('$user_id' , '$post_id')");
     }

$myPosts = mysqli_query($con , "SELECT * from post WHERE  post_id = '$post_id'");
?>
<body>
    <div class="overlay" data-overlay></div>


  <header>

    <div class="header-top">

      <div class="container">


        <div class="header-alert-news">
          <p>
            Discover our
            <b>Kazakhstan</b>
          </p>
        </div>


      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
          <b style="color: black; font-size: larger;">BildSpace</b>
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Let's find something...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">
          <a href="login_page.php">
            <button class="action-btn">
              <ion-icon name="person-outline"></ion-icon>
            </button>
          </a> 
        </div>

      </div>
      
      
      
    </div>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <a href="login_page.php">
          <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="person-outline"></ion-icon>
          </button>
       </a>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">



        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Restaurants</p>


          </button>


        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Hotels</p>

          </button>


        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Entertainments</p>


          </button>


        </li>

      </ul>

      <div class="menu-bottom">


        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>
    
  </header>

<!-- Product_detail -->
<main>

    <div class="small-container single-product">
        <div class="row">
          <div class="col-2">
                  <img  width="100%" id="ProductImg" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image1); ?>" />
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img  width="100%" class="small-img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image1);?>" />
                    </div>
                    <div class="small-img-col">
                        <img  width="100%" class="small-img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image2);?>" />
                    </div>
                    <div class="small-img-col">
                        <img  width="100%" class="small-img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image3);?>" />
                    </div>
                </div>
            </div> 
            <?php
            while ($row = mysqli_fetch_array($myPosts)) {
            $post_id = $row['post_id'];
            $post_name = $row['name'];
            $post_address = $row['address'];
            $info = $row['info'];
            $price = $row['price'];

            if ($price == 0) {
              $price = 'Free';
            }
            else{
              $price = $price."₸";              
            }

?>

            <div class="col-2">
                <p class="Place">Location:  <?php echo $post_address ;?></p>
                <h1><?php echo $post_name ;?></h1>
                <h4><?php echo $price ;?> </h4>
                <form action="save_starred.php" method="POST">
                  <input type="hidden" name="post_id"  value="<?php echo $post_id;?>">
                  <input type="submit" name="submit" value="Add to favourites" class="product_btn">
                </form>
                <h3>About place<i class="fa fa-indent"></i></h3>
                <br>
                <p><?php echo $info ;?>
                </p>
            </div>
          <?php }?>
        </div>
    </div>

</main>

    <footer>
        
        <div class="footer-category">
          
          
        </div>
        
        <div class="footer-nav">
          
          
          <ul class="footer-nav-list">
            
            <li class="footer-nav-item">
              <h2 class="nav-title">Contact</h2>
            </li>
            
            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>
              
              <address class="footer-nav-link">
                419 State 414 Rte
                Beaver Dams, New York(NY), 14812, USA
              </address>
          </li>
          
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            
            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>
          
          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            
            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>
          
        </ul>
        
        <ul class="footer-nav-list">
          
          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>
          
          <li>
            
          </li>
          
        </ul>
        
      </div>
      
      </div>
    
     <div class="footer-bottom">
      
      <div class="container">

        
        
        <p class="copyright">
          Copyright &copy; <a href="#">BildSpace</a> all rights reserved.
        </p>
        
      </div>
      
    </div>
    
  </footer>
  <?php
  if(!empty($_SESSION['post_id'] )){
     unset($_SESSION['post_id']);
       }

if($_SESSION['save_starred'] == 'success'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Post added to favourites");
        </script>
     <?php
     unset($_SESSION['save_starred']);
       }
if($_SESSION['save_starred'] == 'uzhe bar'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("You have already added");
        </script>
     <?php
     unset($_SESSION['save_starred']);
       }
?>
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function()
    {
        ProductImg.src = SmallImg[0].src;
    }

    SmallImg[1].onclick = function()
    {
        ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function()
    {
        ProductImg.src = SmallImg[2].src;
    }

    SmallImg[3].onclick = function()
    {
        ProductImg.src = SmallImg[3].src;
    }

</script>
</body>
</html>