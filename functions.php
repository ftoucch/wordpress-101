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
    
    wp_register_style('lesson-navigation-style' ,get_template_directory_uri() . '/asset/css/navigation.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'lesson-navigation-style');

    $custom_css = theme_get_customizer_css();
    wp_add_inline_style( 'lesson-custom-style', $custom_css );

    wp_add_inline_style( 'lesson-navigation-style', $custom_css );


    wp_register_style('font-awesome' ,get_template_directory_uri() . '/asset/font-awesome/css/font-awesome.min.css', array(), 'all' );
    wp_enqueue_style( 'font-awesome');

    wp_register_script('lesson-navigation-script' ,get_template_directory_uri() . '/asset/js/navigation.js', array(), '1.0.0', true );
    wp_enqueue_script( 'lesson-navigation-script');
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
  // functions to add arrows in front of menu with submenu
    
function be_arrows_in_menus( $item_output, $item, $depth, $args ) {

	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-right"></i>';
		$item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'be_arrows_in_menus', 10, 4 );
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
/*
===========================================
function to Add settings to the Customizer
===========================================
*/
function theme_customize_register( $wp_customize ) {
    // Text color
    $wp_customize->add_setting( 'text_color', array(
      'default'   => '',
      'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Text color', 'theme' ),
    ) ) );

    $wp_customize-> add_setting('header_color', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Header color', 'theme' ),
      ) ) );
  }

  add_action( 'customize_register', 'theme_customize_register' );


  function theme_get_customizer_css() {
    ob_start();

    $text_color = get_theme_mod( 'text_color', '' );
    if ( ! empty( $text_color ) ) {
      ?>
      body {
        color: <?php echo $text_color; ?>;
      }
      <?php
    }


    $header_color = get_theme_mod( 'header_color', '' );
    if ( ! empty( $header_color ) ) {
      ?>
      header {
        background-color: <?php echo $header_color; ?>;
      }
      <?php
    }


    $css = ob_get_clean();
    return $css;
}

    