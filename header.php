<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lesson
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body>
    <header>
       
     <div class="container">
         <nav>
            <div class="menu-icons">
                <i class="fa fa-bars"></i>
                <i class="fa fa-times"></i>
            </div>
            <div class="logo">
            <?php if(has_custom_logo()) :
                    
                        the_custom_logo();
                    
                    
                    else : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <p> <?php bloginfo('description'); ?> </p>
				   <?php

                    endif;        
                    
            
            ?>
            
            </div>

           <?php
           
           wp_nav_menu( array(
               'theme_location' => 'primary_menu',
               'menu_class' => 'nav-list',
               'link_before'          => ' ',
               'link_after'           => ' ',
           ) );
           
           ?>
         <nav>
    
    </div>
    </header>

