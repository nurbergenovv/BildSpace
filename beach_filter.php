<!DOCTYPE html>
<html class="html archive paged tax-mockup_category term-packaging term-28 paged-2" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="alternate" type="application/rss+xml" title="Mockup World Feed" href="https://www.mockupworld.co/feed/">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:400,400i|Open+Sans:600,700&display=swap" as="fetch" crossorigin>
        <title>Packaging Archives - Page 2 of 27 - Mockup World</title>
        <link rel="stylesheet" href="./assets/css/post.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/fbrfg/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/fbrfg/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/uploads/fbrfg/favicon-16x16.png">
        <link rel="manifest" href="/wp-content/uploads/fbrfg/site.webmanifest">
        <link rel="mask-icon" href="/wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/wp-content/uploads/fbrfg/favicon.ico">
    </head>
    <?php

          session_start();
          error_reporting(E_ALL ^ E_WARNING);
        require('connection.php');

?>
    <body>
        <div class="pageWrapper">
            <header class="mainHeader">

                <nav is="flynt-navigation-main" class="flyntComponent">
                    <div class="wrapper">
                        <div class="container centerMaxWidthContainer">
                            <a class="logo" style="text-decoration:none;" href="index.php" >
                                <h3 style="color:#fff">BildSpace</h3>
                            </a>
                            <div class="nav">
                                <ul class="menu menu--level-0">
                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-6695">
                                        <a class="menu-link" href="restaurants.php">Restaurants</a>                          
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6695">
                                        <a class="menu-link" href="hotels.php">Hotels</a>
                                    </li>
                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-65">
                                        <a class="menu-link" href="entertainments.php">Entertainments</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <main class="mainContent">
                <div class="flyntComponent themeLight" is="flynt-hero-header">
                    <div class="container centerMaxWidthContainer heroHeader">
                        <div class="heroHeader-body">
                            <div class="heroHeader-header">
                                <h1 class="heroHeader-title">Beaches</h1>
                                <p class="heroHeader-subtitle">
                                <p>Are you bored? We represent you Kazakhstan's best places for vacation</p>
                                </p>
                            </div>
                            <form class="searchForm" role="search" action="https://www.mockupworld.co/free/category/packaging/">
                                <div class="searchForm-field themeReset">
                                    <div class="searchForm-box">
                                        <input type="search" class="searchForm-input" name="s" placeholder="Let's find places..." value="">
                                        <i data-feather="search" class="searchForm-icon"></i>
                                    </div>
                                    <button type="submit" style="color: #474747;" class="searchForm-submit button">Search</button>
                                </div>
                            </form>
                        </div>
<!--                         <div class="heroHeader-ads">
                            <div class="flyntComponent flyntComponent--blockAds" is="flynt-block-ads">
                                <div class="container">
                                    <script type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7DK23Y&placement=mockupworldco" id="_carbonads_js"></script>
                                </div>
                            </div>
                        </div> -->
                        <div class="heroHeader-background">
                            <span class="heroHeader-gradient heroHeader-gradient--mobile" style="background-image: linear-gradient(267.91deg, #0062E8 1.19%, #208AEC 95.25%);"></span>
                            <span class="heroHeader-gradient heroHeader-gradient--desktop" style="background-image: linear-gradient(267.91deg, #0062E8 1.19%, #208AEC 95.25%);"></span>
                            <div class="heroHeader-mask">
                                <?xml version="1.0" encoding="utf-8"?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1840 606" preserveAspectRatio="none">
                                    <path d="M1598 499.8c-11.1 22.9-33.8 38-59.3 39.4L308.8 604.4c-29.3 1.6-56.5-15.3-68.1-42.3L0 0v606h1840V0l-242 499.8z" fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flyntComponent componentSpacing themeLight" is="flynt-grid-mockups">
                    <div class="container centerMaxWidthContainer">
                        <div class="categories" style="display: flex ; justify-content: space-around;" >
                            <ul class="categories-list">
                                <li class="categories-item">
                                    <a href="mountain_filter.php" class="categories-link ">Mountain</a>
                                </li>
                                <li class="categories-item">
                                    <a href="sight_filter.php" class="categories-link ">Sight</a>
                                </li>
                                <li class="categories-item">
                                    <a href="mall_filter.php" class="categories-link ">Mall</a>
                                </li>
                                <li class="categories-item">
                                    <a href="park_filter.php" class="categories-link ">Park</a>
                                </li>
                                <li class="categories-item">
                                    <a href="beach_filter.php" class="categories-link ">Beach</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="grid">
                            <?php
$myPosts = mysqli_query($con , "SELECT * from post WHERE  type = 'beach' ");
while ($row = mysqli_fetch_array($myPosts)) {
  $post_id = $row['post_id'];
  $post_name = $row['name'];
  $post_info = $row['info'];
  $post_price = $row['price'];
  $post_address = $row['address'];
        $getImage1 = mysqli_query($con,  "SELECT image FROM post_image WHERE name = 'first' AND post_id = '$post_id'");
        $row1 = mysqli_fetch_array($getImage1);
  ?> 
                            <li class="grid-item">
                                <div class="content boxShadow themeReset">
                                    <a href="product_detail.php?id=<?php echo $post_id;?>" class="content-link" data-trigger-modal>
                                        <img class="content-image lazyload" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']);?>"  alt="">
                                        <div class="content-inner boxPadding">
                                            <div class="content-categories">
                                                <span class="pill" style="color:#474747 ;">Location: <?php echo $post_address;?></span>
                                            </div>
                                            <h3 class="content-title"><?php echo $post_name;?></h3>
                                            <p class="content-excerpt"><?php echo $post_info;?>&hellip;</p>
                                        </div>
                                    </a>
                                    <footer class="content-footer">
                                        <span class="content-type"><?php
            if ($post_price == 0) {
              $post_price = 'Free';
            }
            else{
              $post_price = $post_price."₸";              
            }
            echo $post_price;
                                           
                                        ?></span>
                                        <a href="product_detail.php?id=<?php echo $post_id;?>"  class="zbclass" data-trigger-modal>Show More</a>
                                    </footer>
                                </div>
                            </li>
                            <?php }?>
                            
                        </ul>
 
                    </div>

                </div>
            </main>
            <footer style="background: black ;">
        
                
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
            
             <div class="footer-bottom" style="background: black;">
              
              <div class="container">
        
                
                
                <p class="copyright">
                  Copyright &copy; <a href="#">BildSpace</a> all rights reserved.
                </p>
                
              </div>
              
            </div>
            
          </footer>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>