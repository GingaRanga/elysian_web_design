<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elysian_wp_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        
        
        <!-- Modernizr JS - for MFB touchscreen devices -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.touch.js"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <!-- Bootstrap Core CSS -->
        <!-- Paste the custom styles in the theme style.css -->
        <!-- bloginfo fxn to access stylesheet directory which is dynamic -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/app.css" rel="stylesheet">

        <?php wp_head(); ?>
        
        <!-- SHIV needs to be last in head -->
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body <?php body_class(); ?> id="page-top">
        <div id="page" class="site">
	        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elysianwptheme' ); ?></a>

<!-- NAV ================================================================================================================================================================== -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="#page-top">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner-logo-2.svg" width="200" height="70" alt="Elysian Web Design Logo">
                    </a>
                    <a class="navbar-brand visible-xs" href="#page-top">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-blk.svg" width="70" height="70" alt="Elysian Web Design Logo">
                    </a>
                </div><!-- /.navbar-header -->
                
                <!-- php for wordpress nav menu fxn -->
                <?php
                    wp_nav_menu( array(
                        // location found in fxn file of theme
                        'theme_location'    => 'primary',
                        // html5 tag for nav
                        'container'         => 'nav', 
                        // class of container
                        'container_class'   => 'navbar-collapse collapse bar-collapse',
                        // menu class
                        'menu_class'        => 'nav navbar-nav navbar-right'
                        /* now need to set the menu in the wp dashboard */
                    ));
                ?>
                
            </div><!-- /.container-fluid -->
        </nav><!-- /.navbar navbar-default navbar-fixed-top -->