<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lesson
 */
get_header();
?>

<?php 

if (have_posts()):
    // function to check if its is home page and to display the Page Title
    while (have_posts()):
        the_post() ?>
       <?php get_template_part('template-parts/content', get_post_format()); ?> 


    <?php
    endwhile;

endif;


?>

<?php get_footer(); ?>