<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
</head>

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="freelancershub-responsive-nav">
        <div class="container">
            <div class="freelancershub-responsive-menu">
                <div class="logo">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="freelancershub-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } ?>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary_menu',
                        'menu_class'        => "navbar-nav",
                    ) );
                    ?>


                    <div class="others-options">
                        <div class="option-item"><i class="search-btn fa fa-search"></i>
                            <i class="close-btn fa fa-times"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="burger-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Sidebar Modal -->
<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <h2>About Us</h2>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
            </div>
        </div>

        <div class="sidebar-instagram-feed">
            <h2>Instagram</h2>
            <ul>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/1.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/2.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/3.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/4.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/5.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/6.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/7.jpg" alt="image"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-image/8.jpg" alt="image"></a></li>
            </ul>
        </div>

        <div class="sidebar-contact-area">
            <div class="contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:+0881306298615">+088 130 629 8615</a>
                        <span>OR</span>
                        <a href="mailto:freelancershub@gmail.com">freelancershub@gmail.com</a>
                    </h2>

                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <span class="close-btn sidebar-modal-close-btn"><i class="fa fa-times"></i></span>
    </div>
</div>
<!-- End Sidebar Modal -->