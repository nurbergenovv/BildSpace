<?php

session_start();
require('connection.php');
     error_reporting(E_ALL ^ E_WARNING);

        $getID = mysqli_query($con,  "SELECT `user_id` FROM `user` WHERE email = '".$_SESSION['current_user_email']."' and password = '".$_SESSION['current_user_password']."'");
        $row = mysqli_fetch_array($getID);
        $user_ID = $row['user_id'];
        $_SESSION['current_user_id'] = $user_ID;      

        $getType = mysqli_query($con,  "SELECT `type` FROM `user` WHERE email = '".$_SESSION['current_user_email']."' and password = '".$_SESSION['current_user_password']."'");
        $row = mysqli_fetch_array($getType);
        $type = $row['type'];

        $getfname = mysqli_query($con,  "SELECT `user_fname` FROM `user` WHERE email = '".$_SESSION['current_user_email']."' and password = '".$_SESSION['current_user_password']."'");
        $row = mysqli_fetch_array($getfname);
        $user_fname = $row['user_fname']; 

        $getlname = mysqli_query($con,  "SELECT `user_lname` FROM `user` WHERE email = '".$_SESSION['current_user_email']."' and password = '".$_SESSION['current_user_password']."'");
        $row = mysqli_fetch_array($getlname);
        $user_lname = $row['user_lname']; 

        $getbio = mysqli_query($con,  "SELECT `bio` FROM `user` WHERE email = '".$_SESSION['current_user_email']."' and password = '".$_SESSION['current_user_password']."'");
        $row = mysqli_fetch_array($getbio);
        $user_bio = $row['bio'];     

        $post_num = mysqli_query($con, "SELECT count(*) as total from post WHERE user_id = '".$user_ID."'");
        $number_of_posts=mysqli_fetch_assoc($post_num);                

        $starred_num = mysqli_query($con, "SELECT count(*) as total from starred WHERE user_id = '".$user_ID."'");
        $number_of_starred=mysqli_fetch_assoc($starred_num);   

        $getAva = mysqli_query($con,  "SELECT `ava` FROM `ava` WHERE user_id = '$user_ID'");
        $row = mysqli_fetch_array($getAva);
        if (empty($row)) {
          $src = "./assets/images/icons/ava.png";
        }
        else{
        $user_ava = $row['ava'];
}

if( !empty($_SESSION['current_user_email']) && !empty($_SESSION['current_user_password']) ){
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portfolio dashboard</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/profile_page.css" />
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <ul class="nav__list" role="menubar">
          <li class="nav__item nav__item--isActive">
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
                  fill="#6563ff"
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
          <li class="nav__item">
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
            <form action="" class="search">
              <button class="search__button focus--box-shadow" type="submit">
                <svg
                  class="search__icon"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"
                  />
                </svg>
              </button>
              <input
                class="search__input focus--box-shadow"
                type="text"
                placeholder="Find your favourite"
              />
            </form>
           
          </div>
        </header>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">My Placelists</h2>
            <a href="#" class="section__link">View all</a>
          </header>
          <ul class="team">
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <span class="photo__substrate">+2</span>
                    </li>
                    <li class="photo__item">
                      <img
                        src="./assets/images/atyrau2.jpg"
                        alt="Jack's photo"
                      />
                    </li>
                    <li class="photo__item">
                      <img
                        src="./assets/images/atyrau.jpg"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">Lovely Atyrau</p>
                  <time class="date" datetime="2020-05-05T10:00:00"
                    >Edited yesterday</time
                  >
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <span class="photo__substrate">+6</span>
                    </li>
                    <li class="photo__item">
                      <img
                        src="./assets/images/atyrau.jpg"
                        alt="Yulia's photo"
                      />
                    </li>
                    <li class="photo__item">
                      <img
                        src="./assets/images/atyrau2.jpg"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">New Placelist</p>
                  <time class="date" datetime="2020-05-01T10:00:00"
                    >Edited 10 days ago</time
                  >
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <img
                        src="./assets/images/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">Design development</p>
                  <time class="date" datetime="2020-01-10T10:00:00"
                    >10 January, 2020</time
                  >
                </div>
              </a>
            </li>
          </ul>
        </section>
        <?php 
         if($type == "business_acc"){
        ?>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">My posts</h2>
            <div class="section__control">
              <button
                class="section__button section__button--painted focus--box-shadow"
                type="button"
                aria-label="Add New project"
                onClick="location.href = 'addPost.php'"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  role="presentation"
                >
                  <path
                    d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                  />
                </svg>
              </button>
            </div>
          </header>
          <?php 
             $myPosts = mysqli_query($con , "SELECT * from post WHERE user_id = '$user_ID' ");
             while ($row = mysqli_fetch_array($myPosts)) {
               $post_id = $row['post_id'];
               $post_name = $row['name'];
               $created_at = $row['created_at'];
             
          ?>
          <ul class="project">
            <li class="project__item">
              <a href="product_detail.php?id=<?php echo $post_id;?>" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                    <div
                      class="icon icon--rajah"
                      aria-label="Icon for the project 'Book cover design'"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                      >
                        <path
                          d="M15,6H9A1,1,0,0,0,8,7v4a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V7A1,1,0,0,0,15,6Zm-1,4H10V8h4Zm3-8H5A1,1,0,0,0,4,3V21a1,1,0,0,0,1,1H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Zm1,17a1,1,0,0,1-1,1H6V4H17a1,1,0,0,1,1,1Z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"><?php echo $post_name; ?></span>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      ><?php echo $created_at; ?></time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Published</span>
                  </div>
                  <div class="project__element project__setting">
                    <form action="edit_post.php" method="POST">
                      <input type="hidden" name="post_id" value="<?php echo $post_id;?>">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="submit"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                      </svg>
                    </button>
                    </form>
                  </div>
                </div>
              </a>
            </li>
          <?php }  ?>
          </ul>
        </section>
      <?php } ?>
      </main>
      <aside class="aside">
        <section class="section">
          <div class="aside__control">
            <a href='index.php'>
            <button
              class="aside__button focus--box-shadow"
              type="button"
              aria-label="Close profile settings"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"
                />
              </svg>
            </button>
         </a>
          </div>
          <div class="profile-main">
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
            <img class="profile-main__photo" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user_ava); ?>" />
          <?php }?>
            </button>
            <h1 class="profile-main__name"><?php  echo $user_fname ." ". $user_lname  ?></h1>
          </div>
          <ul class="statistics">
          <?php 
             if($type != "traveller_acc"){
            ?>            
            <li class="statistics__entry">
              <a class="statistics__entry-description" >Posts</a
              ><span class="statistics__entry-quantity"><?php echo $number_of_posts['total']; ?></span>
            </li>
            <?php } ?>
            <li class="statistics__entry">
              <a class="statistics__entry-description" >Favourite places</a
              ><span class="statistics__entry-quantity"><?php echo $number_of_starred['total']; ?></span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" ><?php echo $user_bio; ?></a>
            </li>
          </ul>
          <?php 
             if($type == "traveller_acc"){
            ?>
          <div class="banner">
            <h3 class="banner__title">Business account</h3>
            <p class="banner__description">Add posts and provide your tourism business</p>
            <a href="functions.php?get_premium=true">
            <button class="banner__button" type="button">
              Get Business Account
            </button>
            </a>
          </div>
          <?php  }?>
        </section>
      </aside>
    </div>
  </body>
</html>
<?php
   if($_SESSION['change_user_type'] == 'success'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Now you have business account");
        </script>
     <?php
     unset($_SESSION['change_user_type']);
       }
    if($_SESSION['edited'] == 'edited'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Post succesfully edited");
        </script>
     <?php
     unset($_SESSION['edited']);
       }
    if($_SESSION['addpost'] == 'success'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Post succesfully created");
        </script>
     <?php
     unset($_SESSION['addpost']);
       }
      if($_SESSION['addpost'] == 'fail'){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Something went wrong");
        </script>
     <?php
     unset($_SESSION['addpost']);
       }
    if(!empty($_SESSION['ava_change'])){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("<?php echo $_SESSION['ava_change'];?>");
        </script>
     <?php
     unset($_SESSION['ava_change']);
       }
           if(!empty($_SESSION['post_image'])){
    ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("<?php echo $_SESSION['post_image'];?>");
        </script>
     <?php
     unset($_SESSION['post_image']);
       }
}
else{
  header('location:login_page.php');
}
?>







                    