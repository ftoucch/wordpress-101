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
        <div class="container container-nav">
        <div class="site-branding">
        <?php if ( ! has_custom_logo() ) { ?>

                <h1><a class="site-title-link" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="subtitle"> <?php bloginfo('description') ?></p>
            <?php
            } else {
            the_custom_logo();
            }
            ?>

        </div>
    <nav>
        <?php wp_nav_menu(
            array(
                'theme_locatiom' => 'primary_menu',
            )
        ); ?>
    </nav>
    </div><!-- close container -->
    </header>

