<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }

// Enqueue JS files
function etcskel_queue_js()
{
	$dir = get_template_directory_uri();

	// Deregister WP supplied jQuery and load jQuery from theme directory
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', $dir . '/assets/js/vendor/jquery-3.6.0.min.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );

    // Load main js file
    wp_enqueue_script( 'main_js', $dir . '/assets/js/main.js', array(), false, true );

    // Example how to conditionally load js file based on page template
    // if( is_page_template( 'page_example.php' ) )
    // {
    //     wp_enqueue_script( 'page_eample_js', $dir . '/assets/js/example.js', array(), false, true );
    // }

    /**
     * Conditionally load js files for matching page templates
     * E.g. page_example.php loads assets/js/page_example.js
     */
    // if( is_page_template() )
    // {
    //     $name = rtrim( basename( get_page_template() ), '.php' );
    //     if( file_exists( get_template_directory() . '/assets/js/' . $name . '.js' ) )
    //     {
    //         wp_enqueue_script( $name . '_js', $dir . '/assets/js/' . $name . '.js', array(), false, true );
    //     }
    // }

}
add_action( 'wp_enqueue_scripts', 'etcskel_queue_js' );