<?php 

remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_generator');

if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}


// CUSTOM ADMIN LOGIN HEADER LOGO
 
function my_custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url('.get_bloginfo('template_directory').'/images/logo_lg.png)  !important; width: 300px !important; background-size: 300px !important;} body{background-color: #12121a !important;}</style>';
}
add_action('login_head',  'my_custom_login_logo');

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    }
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

add_theme_support( 'post-thumbnails' ); 









?>