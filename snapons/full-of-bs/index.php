<?php
/*
Snap-on Name: Full of BS
Description: Snap-on for blog.briansahagun.com
Author: Brian Dys Sahagun
Version: 0.0.1
Author URI: http://applicator.dysinelab.com
*/





// HTML Class
function applicator_kid_multisite_directory_snapon_full_of_bs_html_classes() {
		
    $snapon_name = 'applicator-kid--multisite-directory-snapon--full-of-bs';

    echo ' ' . $snapon_name;

}
add_action( 'applicator_hook_html_class', 'applicator_kid_multisite_directory_snapon_full_of_bs_html_classes');





// Styles
function applicator_kid_multisite_directory_snapon_full_of_bs_styles() {
    
    wp_enqueue_style( 'applicator-kid--multisite-directory-snapon--full-of-bs-style', get_theme_file_uri(). '/snapons/full-of-bs/assets/css/full-of-bs.css' );

}
add_action('wp_enqueue_scripts', 'applicator_kid_multisite_directory_snapon_full_of_bs_styles', 0);