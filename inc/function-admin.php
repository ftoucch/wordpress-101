<?php 
/*
Lesson Administration Page Settings

*/

/*

================================
function to Enqueue Script
===============================
*/

function admin_script_enqueue($hook)
{
    if ('toplevel_page_Lesson_option' != $hook)
    {
        return;
    }
    wp_register_style('lesson_admin_css', get_template_directory_uri() . '/asset/css/admin.dashboard.css', array(),'1.0.0','all');
    wp_enqueue_style('lesson_admin_css');
}
add_action('admin_enqueue_scripts', 'admin_script_enqueue');


/*

================================
function to Add Admin Menu Page
===============================
*/

function add_admin_menu()
{
    //generate lesson admin page
    add_menu_page( 'Lesson Theme Option', 'Lesson Option', 'manage_options', 'Lesson_option', 'lesson_add_admin_page','', 100 );

    //initialises the admin menu page settings this is done here just incase something goes wrong in here

    add_action('admin_init', 'lesson_admin_settings');
}

add_action('admin_menu', 'add_admin_menu');


function lesson_admin_settings()
{
   
}
function lesson_add_admin_page()
{
         //generate our admin page  
        require_once (get_template_directory().'/templates/lesson-admin-page.php');
}
