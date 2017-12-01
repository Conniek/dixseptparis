<!doctype html>
<html class="no-js" lang="en-US">
<head>

    <!-- DEFAULT META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" type="text/css">
       
    <!-- CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
    
    <!-- DOCUMENT TITLE -->
    <title><?php echo get_bloginfo( 'name' ); ?> </title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">


</head>

<body <?php body_class(); ?>>


<!-- PAGE LOADER -->
<!--<div id="page-loader" class="text-light show-logo">
    <span class="loader-icon bullets-jump"><span></span><span></span><span></span></span>
</div>-->
<!-- PAGE LOADER -->


<!-- PAGE CONTENT -->
<div id="page-content">
        
    <!-- HEADER -->
    <header id="header" class="header-left">        
        <div class="header-inner clearfix">
            
            <!-- MAIN NAVIGATION -->
            <div id="menu" class="clearfix">            
                                
                <div class="menu-actions">
                    <div class="menu-toggle"><span class="hamburger"></span></div>
                </div> <!-- END .menu-actions -->
                
                <div id="menu-inner">
                    <!-- LOGO -->
                    <div id="logo" class="logo-left text-dark">
                       
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <h1> <?php bloginfo( 'name' ); ?></h1>
                            </a>
                        
                        </a>
                    </div>
                    <nav id="main-nav">
                        <ul>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        </ul>
                    </nav>
                    <div id="header-widget" class="social">

                    <?php
                      if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                        <?php dynamic_sidebar( 'sidebar-3' ); ?>
                    <?php } ?>
                    </div>
                </div><!-- END #menu-inner -->
            </div><!-- END #menu -->

            
        </div> <!-- END .header-inner -->
        <span class="pseudo-close header-close"></span>
    </header>
    <!-- HEADER end -->