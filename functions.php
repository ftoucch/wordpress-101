<?php 
/*
Lesson function and description

*/

/*

================================
function to Enqueue Script
===============================
*/

function lesson_script_enqueue()
{
    //get the default style sheet
    wp_enqueue_style( 'lesson-major-style', get_stylesheet_uri(), array() );
    wp_register_style('lesson-custom-style' ,get_template_directory_uri() . '/asset/css/lesson.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'lesson-custom-style');
    wp_register_style('lesson-register-style' ,get_template_directory_uri() . '/asset/css/signup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'lesson-register-style');
    wp_register_style('lesson-navigation-style' ,get_template_directory_uri() . '/asset/css/navigation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'lesson-navigation-style');
}

add_action('wp_enqueue_scripts', 'lesson_script_enqueue');


/*

================================
function to Add theme support
===============================
*/

function lesson_theme_support()
{
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    /*
    ==================================
        Register Navigation Menu
    ==================================

    */

    register_nav_menus(
        array(

            'primary_menu' => esc_html__('Primary','Main Menu'),
            'secondary_menu' => esc_html__('Secondary', 'Optional Menu')

    ) );
}

add_action('after_setup_theme', 'lesson_theme_support');

/*

======================================
add theme Support
======================================
*/

 add_theme_support('post-thumbnails');
 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support(
    'custom-logo',
    array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    )
);

// function to register sidebar
function lesson_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
    );
    
    register_sidebar(
		array(	
			'name'	=> 'Sidebar 2',
			'id'	=> 'sidebar-3',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
    
    
	
}
add_action('widgets_init','lesson_widget_setup');
/*

======================================
function to Require the Admin Function
======================================
*/
require get_template_directory() . '/inc/function-admin.php';

/*

======================================
function to Require the customizer
======================================
*/
require get_template_directory() . '/partials/customizer.php';