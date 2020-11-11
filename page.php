<?php
/**
 * The main page template file
 *.
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
       <?php get_template_part('template-parts/content-page',get_post_format()); ?> 


    <?php
    endwhile;

endif;


?>

<?php get_footer(); ?>