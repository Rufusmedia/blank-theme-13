<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- meta desc & title will be supplied by plugin -->
        <title></title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- stylesheets & stuff -->
        <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/site-assets/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="six columns">
                    <div class="padding">
                        <img src="http://placebox.es/250/50/ffcc00/ffffff/" alt="">
                    </div><!-- end .padding -->
                </div><!--  end .six.columns -->

                <div class="ten columns">
                    <div class="padding">
                        <nav>
                            <?php 
                                wp_nav_menu( array('theme_location' => 'header-menu', 'menu_class' => 'menu clearfix')); 
                            ?>
                        </nav>
                    </div><!-- end .padding -->
                </div><!--  end .ten.columns -->
            </div><!--  end .container  -->
        </header>