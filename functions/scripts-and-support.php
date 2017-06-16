<?php
/* Admin Scripts and Styles */
/*
function register_casper_cta_scripts(){
	if(is_admin()){
		wp_enqueue_script('casper_cta_admin_script', plugin_dir_url( __FILE__ ).'../js/admin.js', '', '', true);
		wp_enqueue_style('casper_cta_admin_style', plugin_dir_url( __FILE__ ).'../css/admin.css' );
	}
}
add_action('admin_init', 'register_casper_cta_scripts');

/* Make sure Theme has jQuery! */
function register_jquery_in_cpln(){
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'register_jquery_in_cpln' );

/* Front End Scripts and Styles */
function cpln_scripts_and_styles(){
	wp_enqueue_script('casper_leaving_script', plugin_dir_url( __FILE__ ).'../caspers-leave-notice.js', '', '', true);
	wp_enqueue_style( 'casper_leaving_style', plugin_dir_url( __FILE__ ).'../caspers-leave-notice.css' );
}
add_action( 'wp_enqueue_scripts', 'cpln_scripts_and_styles' );

/* Support for Gravity Forms Add Form Button */
/*
function display_form_button_on_cpln_page( $is_post_edit_page ) {
    if ( isset( $_GET['page'] ) && $_GET['page'] == 'caspers-flyin-cta' ) {
        return true;
    }

    return $is_post_edit_page;
}
add_filter( 'gform_display_add_form_button', 'display_form_button_on_cpln_page' );
*/

/* Add Settings Link to Plugin Page */
add_filter('plugin_action_links', 'cpln_settings_link', 10, 2);
function cpln_settings_link($links, $file) {
    if ( $file == 'caspers-leave-notice/caspers-leave-notice.php' ) {
        /* Insert the link at the end*/
        $links['settings'] = sprintf( '<a href="%s"> %s </a>', admin_url( 'options-general.php?page=cpleavenotice' ), __( 'Settings', 'plugin_domain' ) );
    }
    return $links;
}