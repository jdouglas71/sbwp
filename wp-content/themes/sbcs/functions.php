<?php

/** START function will remove the parent filter  */
add_action( 'after_setup_theme', 'child_remove_filters' );

if ( !function_exists( 'child_remove_filters' ) ):
    function child_remove_filters() 
    {
        remove_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );
    }
endif;
/** END function will remove the parent filter  */

add_action('widgets_init', 'add_my_sidebars'); 

function add_my_sidebars()
{
    register_sidebar( array(
        'name' => 'Admissions Sidebar',
        'id' => 'admissions-sidebar',
        'description' => 'Admissions Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Academics Sidebar',
        'id' => 'academics-sidebar',
        'description' => 'Academics Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );    

    register_sidebar( array(
        'name' => 'College Counseling Sidebar',
        'id' => 'ccounseling-sidebar',
        'description' => 'College Counseling Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'International Program Sidebar',
        'id' => 'internationalp-sidebar',
        'description' => 'International Program Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Athletics Sidebar',
        'id' => 'althletics-sidebar',
        'description' => 'Athletics Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Parents Sidebar',
        'id' => 'parents-sidebar',
        'description' => 'Parents Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Supporting Sidebar',
        'id' => 'supporting-sidebar',
        'description' => 'Supporting Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Alumni Sidebar',
        'id' => 'alumni-sidebar',
        'description' => 'Alumni Template Sidebar',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


} 


?>
