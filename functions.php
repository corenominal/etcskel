<?php if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }

// Include all files in the functions directory
foreach ( glob( get_template_directory() . '/functions/*.php' ) as $f )
{
    // Skip index.php file
    if( $f != get_template_directory() . '/functions/index.php' )
        require_once( $f );
}
