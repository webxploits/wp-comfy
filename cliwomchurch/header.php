<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lord HTML5 Responsive Template</title>
<!--CUSTOM CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/custom.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--COLOR CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/color.css" rel="stylesheet" type="text/css">
<!--RESPONSIVE CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<!--FONTAWESOME CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--Scrollbar CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<!--Audio Player Css-->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/audioplayer.css" />
<!--ICONMOON CSS-->
<link href="<?php bloginfo( 'template_url' ); ?>/css/iconmoon.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class('theme-style-1'); ?>>

<!--WRAPPER START-->
<div id="wrapper">
  <!--HEADER START-->
  <header id="header">
    <div class="container-fluid">

    <?php
    // LOGO management
    if ( get_theme_mod( 'comfy_logo' ) ) : ?>
      <strong class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        <img src="<?php echo esc_url( get_theme_mod( 'comfy_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
      </a></strong>
    <?php else : ?>
      <strong class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="img">
      </a></strong>
    <?php endif; ?>

      <div class="navigation-row">
        <div class="header-3-top-box">
          <div class="top-search"> <a href="#" class="search-icon" id="search-push"><i class="fa fa-search"></i></a> </div>
          <!--BURGER NAVIGATION SECTION START-->
          <div class="cp-burger-nav home-3"> 
            <!--BURGER NAV BUTTON-->
            <div id="cp_side-menu-btn" class="cp_side-menu"><a href="#" class=""><img src="<?php bloginfo( 'template_url' ); ?>/images/menu-icon-3.png" alt="img"></a>Menu</div>
            <!--BURGER NAV BUTTON--> 
            
            <!--SIDEBAR MENU START-->
            <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
              <div class="content mCustomScrollbar">
                <div id="content-1" class="content">
                  <div class="cp_side-navigation">
                    <nav>
                      <ul class="navbar-nav">
                        <li class="active"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="index.html">Lord Theme</a></li>
                            <li><a href="index-4.html">Children’s Ministry</a></li>
                            <li><a href="index-3.html">Church Events</a></li>
                            <li><a href="index-2.html">Church Store</a></li>
                            <li><a href="index-5.html">Pastor</a></li>
                            <li><a href="index-6.html">Causes</a></li>
                          </ul>
                        </li>
                        <li><a href="job-seekers.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sermons<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="sermons.html">Sermons</a></li>
                            <li><a href="sermons-grid.html">Sermons Grid</a></li>
                            <li><a href="sermons-list.html">Sermons With Sidebar</a></li>
                            <li><a href="sermons-detail.html">Sermons Details</a></li>
                          </ul>
                        </li>
                        <li><a href="employers.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="about-2.html">I’M New Here</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ministries<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="ministries.html">Ministries</a></li>
                            <li><a href="senior-ministry-detail.html">Senior Ministry</a></li>
                            <li><a href="youth-ministry-detail.html">Youth Ministry</a></li>
                            <li><a href="wedding-ministry-detail.html">Wedding Ministry</a></li>
                            <li><a href="family-ministry-detail.html">Family Ministry</a></li>
                            <li><a href="childrens-ministry-detail.html">Childrens Ministry</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="event-box.html">Event Box</a></li>
                            <li><a href="event-grid.html">Event Grid</a></li>
                            <li><a href="event-list.html">Event List</a></li>
                            <li><a href="event-calendar.html">Event Calendar</a></li>
                            <li><a href="event-list-with-sidebar.html">Event With Sidebar</a></li>
                            <li><a href="event-timeline.html">Event Timeline</a></li>
                            <li><a href="event-detail.html">Event Details</a></li>
                          </ul>
                        </li>
                        <li><a href="jobs.html" data-toggle="dropdown" role="button" aria-expanded="false">Pages<span class="caret"></span></a>
                          <ul  class="dropdown-menu" role="menu">
                            <li><a href="product.html">Product</a></li>
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="product-with-sidebar.html">Product With Sidebar</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="empty-cart.html">Empty Cart</a></li>
                            <li><a href="error-page-1.html">404</a></li>
                            <li><a href="error-page-2.html">Oppss</a></li>
                            <li><a href="comingsoon.html">Comingsoon</a></li>
                          </ul>
                        </li>
                        <li><a href="companies.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                          </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="gallery-1-col.html">Gallery One Column</a></li>
                            <li><a href="gallery-2-col.html">Gallery Two Column</a></li>
                            <li><a href="gallery-3-col.html">Gallery Three Column</a></li>
                            <li><a href="gallery-4-col.html">Gallery Four Column</a></li>
                            <li><a href="gallery-full.html">Gallery Full</a></li>
                          </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="btn-row"> <a href="#" class="btn-style-1">Know More</a> </div>
              <strong class="copy">Contact us <b>+</b>660 252265866</strong>
              <div class="currency-language-row">
                <div class="currency-box">
                  <div class="dropdown">
                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cur <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                      <li><a href="#">Euro</a></li>
                      <li><a href="#">Pound</a></li>
                      <li><a href="#">Euro</a></li>
                    </ul>
                  </div>
                </div>
                <div class="currency-box">
                  <div class="dropdown">
                    <button id="dLabel2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Eng <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                      <li><a href="#">FR</a></li>
                      <li><a href="#">EN</a></li>
                      <li><a href="#">RU</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="sidebar-social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!--SIDEBAR MENU END--> 
            
          </div>
          <!--BURGER NAVIGATION SECTION END--> 
        </div>
        <div class="small-menu">
          <ul>
            <li><a href="#">Locations &amp; Times</a></li>
            <li><a href="#">Giving</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!--HEADER END--> 
  
  <!--HEADER SEARCH-->
  <div id="cp-slide-search" class="cp_side-search">
    <form method="get">
      <input type="text" placeholder="Enter Your Search..." required>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <!--HEADER SEARCH--> 
  
  <!--BANNER START-->
  <div id="banner">
    <div id="home-banner" class="owl-carousel owl-theme">

      <!-- sample: start -->
      <div class="item">
        <?php if ( get_theme_mod( 'comfy_homefeature' ) ) : ?>
            <img src="<?php echo esc_url( get_theme_mod( 'comfy_homefeature' ) ); ?>" alt="img">
		    <?php endif; ?>
        <div class="caption">
          <div class="container">
            <span>nO ONE COMES TO THE fATHER EXCEPT THROUGH ME.</span>
            <h1>I AM THE WAY, THE TRUTH</h1>
            <div class="btn-row"> <a href="sermons-detail.html" class="btn-style-1">Sermon Series</a> </div>
          </div>
        </div>
      </div>
      <!-- sample: end -->
      
      <div class="item"> <img src="<?php bloginfo( 'template_url' ); ?>/images/banner-style-3-img-1.jpg" alt="img">
        <div class="caption">
          <div class="container"> <span>nO ONE COMES TO THE fATHER EXCEPT THROUGH ME.</span>
            <h1>I AM THE WAY, THE TRUTH</h1>
            <div class="btn-row"> <a href="sermons-detail.html" class="btn-style-1">Sermon Series</a> </div>
          </div>
        </div>
      </div>
      <div class="item"> <img src="<?php bloginfo( 'template_url' ); ?>/images/banner-img-2.jpg" alt="img">
        <div class="caption">
          <div class="container"> <span>nO ONE COMES TO THE fATHER EXCEPT THROUGH ME.</span>
            <h1>I AM THE WAY, THE TRUTH</h1>
            <div class="btn-row"> <a href="sermons-detail.html" class="btn-style-1">Sermon Series</a> </div>
          </div>
        </div>
      </div>
      <div class="item"> <img src="<?php bloginfo( 'template_url' ); ?>/images/banner-img-1.jpg" alt="img">
        <div class="caption">
          <div class="container"> <span>nO ONE COMES TO THE fATHER EXCEPT THROUGH ME.</span>
            <h1>I AM THE WAY, THE TRUTH</h1>
            <div class="btn-row"> <a href="sermons-detail.html" class="btn-style-1">Sermon Series</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->