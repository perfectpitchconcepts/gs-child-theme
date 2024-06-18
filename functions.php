<?php

/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */


function generatepress_child_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}

// 	wp_enqueue_style( 'gs-css', get_stylesheet_directory_uri().'/custom.css' );	
	
}
add_action( 'wp_enqueue_scripts', 'generatepress_child_enqueue_scripts', 100 );




// add_action( 'admin_enqueue_scripts', function () {
// 	wp_enqueue_style( 'gs-css', get_stylesheet_directory_uri().'/custom.css' );
// }, 100 );


add_filter( 'gform_init_scripts_footer', '__return_true' );


// add_filter( 'generate_logo_href','generate_custom_logo_href' );
function generate_custom_logo_href()
{
	// Enter the URL you want your logo to link to below
// 	return 'https://website.com/';
}




// add_filter( 'alm_debug', '__return_true' );



add_filter( 'generate_sidebar_layout','gs_sidebar_layout' );
function gs_sidebar_layout( $layout )
{
	// If we are on a single page for a CPT, set the sidebar
// 	if ( is_singular( 'post-type' ) )
// 		return 'left-sidebar';

	// If we are targeting a specific page, set the sidebar
// 	if ( is_page( 9628 ) )
// 		return $layout;

	// Or else, set the regular layout
	return $layout;

}




add_filter('upload_mimes', function ( $mime_types = array() ) { 
	// add your own extension here - as many as you like
// 	$mime_types['vcf'] = 'text/vcard'; 
	$mimes['svg']  = 'image/svg+xml';
	// return amended array
	return $mime_types;
});



