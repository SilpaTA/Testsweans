<!DOCTYPE html>
<html lang="en" id="tab-home">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="main-header">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6">
                        <div class="logo-wrap mt-4">
                            <a href="<?php echo get_site_url(); ?>" class="">
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/04/logo.png" class="img-fluid logo" alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6 col-6">
                        <div class="menu-wrap mt-4">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="#"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                         <?php 
                                            wp_nav_menu( array(
                                                'theme_location'    => 'main-menu',
                                                'depth'             => 1,
                                                'container'         => 'div',
                                                'container_class'   => 'mainMenu',
                                                'menu_class'        => 'navbar-nav mr-auto mt-2 mt-lg-0',
                                              ) );
                                          ?>
   
                                        <div class="header-cnt-btn">
                                            <a href="#" class="contactus-btn btn ">Contact Us</a>
                                        </div>
                                    </div>
                            </nav>
                        </div>
                </div>
            </div>
        </div>
    </div>
      
    </div>
</div>
    