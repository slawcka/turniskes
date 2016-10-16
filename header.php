<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package turniskesWEB
 */

$didelis_pristatymas = get_field('didelis_pristatymas');
$pristatymo_tekstas = get_field('pristatymo_tekstas');
$telefono_numeris = get_field('telefono_numeris');


?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/e60d25ccc7.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>-->
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content', 'turniskes' ); ?>
            </a>


                <div class="container-fluid t-menu">
                    <div class="container">
                    <div class="row">
                    <div class="inner">
                    <nav>
                        <a  class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>


                        <input type="checkbox" id="nav" /><label for="nav"></label>
                        <?php wp_nav_menu( array(
                                 'theme_location' => 'header',
                                 'container' => '',
                                 'container_class' => ''
                         )); ?>
<div class="telnr"><p class="nrg"> +37069807786 </p> <a href="mailto:vynas@rekin.lt" >vynas@rekin.lt</a></div>
                    </nav>

                    </div>

                    </div>
                    </div>
                </div>



            <div id="content" class="site-content">
