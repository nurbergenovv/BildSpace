<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/276852f8f8.js" crossorigin="anonymous"></script>
  <title>BildSpace - Discover our Kazakhstan</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/bildspace_favicon.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>

  <div class="overlay" data-overlay></div>

  <!--
    - HEADER
  -->

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

          <input type="search" name="search" class="search-field" placeholder="Let's go for your wishful place...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">
          <?php

          session_start();
          error_reporting(E_ALL ^ E_WARNING);
          if ($_SESSION['current_user_email'] && $_SESSION['current_user_password']){
            ?>
            <a href="profile_page.php">
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
            </a>
            <?php
          }else{
         ?>
            <a href="login_page.php">
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
            </a>
            <?php
          }

          ?>

         



        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
          </li>


          <li class="menu-category">
            <a href="restaurants.php" class="menu-title">Restaurants</a>


          </li>

          <li class="menu-category">
            <a href="hotels.php" class="menu-title">Hotels</a>

          </li>

          <li class="menu-category">
            <a href="entertainments.php" class="menu-title">Entertainments</a>

          </li>
          <li></li>
        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

<?php
          if ($_SESSION['current_user_email'] && $_SESSION['current_user_password']){
            ?>
            <a href="profile_page.php">
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
            </a>
            <?php
          }else{
         ?>
            <a href="login_page.php">
              <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
              </button>
            </a>
            <?php
          }

          ?>

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

          <a href="restaurants.php"><button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Restaurants</p>

          </button>
          </a>
        </li>

        <li class="menu-category">

          <a href="hotels.php"><button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Hotels</p>

          </button>
          </a>

        </li>

        <li class="menu-category">

          <a href="entertainments.php"><button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Entertainments</p>

          </button>
          </a>

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





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/banner-1.png" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending Place</p>

              <h2 class="banner-title">Shymbulak Mountain resort</h2>

              <p class="banner-text">
                Entrance 	 <b>2000</b> &#8376;
              </p>

              <a href="#" class="banner-btn">Read More</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-2.png" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Top Rated Place</p>

              <h2 class="banner-title">Baiterek Monument</h2>

              <p class="banner-text">
                Entrance  <b>500</b> &#8376;
              </p>

              <a href="#" class="banner-btn">Read More</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-3.png" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Hotel of the week</p>

              <h2 class="banner-title">Ritz-Carlton Hotel</h2>

              <p class="banner-text">
                One night <b>98560</b> &#8376;
              </p>

              <a href="#" class="banner-btn">Read More</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/building.svg" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">17 region's places</h3>

              </div>


            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/landscape.svg" alt="winter wear" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Tourism guide</h3>

              </div>


            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/service.svg" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">50+ restaurants
                  and hotels</h3>

              </div>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/friendship.svg" alt="shorts & jeans" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Commercial and 
                  user accounts</h3>

              </div>


            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">Top Restaurants</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/barvilla.png" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                    

                      <a href="#">
                        <h4 class="showcase-title">BarVilla</h4>
                      </a>

                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Shymkent</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/vipLounge.png" alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title" >VIP LOUNGE MARTELL&CO</h4>
                      </a>
                  
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Almaty</p>
                      </div>
                      
                      <a href="#" class="showcase-category">Read More</a>
                  
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/ltBar.png" alt="black floral wrap midi skirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">LT BAR&GRILL</h4>
                      </a>
                  
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Almaty</p>
                      </div>
                      <a href="#" class="showcase-category">Read More</a>
                  
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/kaiserhof.png" alt="pure garment dyed cotton shirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title" >KAISERHOF</h4>
                      </a>
                  
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Nur-Sultan</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
                  
                  
                    </div>
                  
                  </div>

                </div>


              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Hotels</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/ritz.png" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">The Ritz-Carlton</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Almaty</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/rixos.png" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title" >Rixos Khadisha</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Shymkent</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/wyndham.png" alt="womens party wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Wyndham Garden</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Nur-Sultan</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/hilton.png" alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title" >Hilton Garden</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Nur-Sultan</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                </div>
            
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Entertainments</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shymbulak.png" alt="pocket watch leather pouch" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Shymbulak Mountain Resort</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Almaty</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/tree_of_life.png" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Tree of Life</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Aktau</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/baiterek.png" alt="titan 100 ml womens perfume" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Baiterek Monument</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Nur-Sultan</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/burabay.png" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Burabay</h4>
                      </a>
            
                      <div class="price-box">
                        <p class="price" style="color: var(--eerie-black); font-size: smaller;"><i class="fa-solid fa-location-smile"></i>Kokshetau</p>
                      </div>

                      <a href="#" class="showcase-category">Read More</a>
            
            
                    </div>
            
                  </div>
            
                </div>
            
            
              </div>
            
            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Place of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/sharyn.png" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="">
                      <h3 class="showcase-title">charyn canyon</h3>
                    </a>

                    <p class="showcase-desc">
                      Сharyn Сanyon is a canyon on the Sharyn River in Kazakhstan (200 kilometres (120 mi) east of Almaty, close to the Chinese border). The canyon is roughly 154 kilometres (96 mi) in length
                    </p>

                    <div class="price-box">
                      <p class="price">1000&#8376;</p>
                      <p style="font-size: smaller;">Entrance fee</p>
                    </div>

                    <button class="add-cart-btn">add to favourites</button>

                    

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Season ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">30</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

             

            </div>

          </div>


</main>
  <!--
    - FOOTER
  -->

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

            <address class="content">
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


  <script src="./assets/js/index_page.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>