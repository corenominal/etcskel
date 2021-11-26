<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }

// Enqueue CSS files
function etcskel_queue_css()
{
	$dir = get_template_directory_uri();

    // Load main css file
    wp_enqueue_style( 'main_css', $dir . '/assets/css/main.css', array(), false );

    // Example how to conditionally load css file based on page template
    // if( is_page_template( 'page_example.php' ) )
    // {
    //     wp_enqueue_style( 'page_example_css', $dir . '/assets/css/example.css', array(), false );
    // }

    /**
     * Conditionally load css files for matching page templates
     * E.g. page_example.php loads assets/css/page_example.css
     */
    // if( is_page_template() )
    // {
    //     $name = rtrim( basename( get_page_template() ), '.php' );
    //     if( file_exists( get_template_directory() . '/assets/css/' . $name . '.css' ) )
    //     {
    //         wp_enqueue_style( $name . '_css', $dir . '/assets/css/' . $name . '.css', array(), false );
    //     }
    // }

}
add_action( 'wp_enqueue_scripts', 'etcskel_queue_css' );