<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {
    
    /**
	 * Enqueues scripts and styles.
	 *
     * @return void
     */
    static public function enqueue_scripts()
    {
    	//fonts
    	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400i,500,600,700,800,900&display=swap' );
    	//css
	    wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/style.css' );

	    if( is_page( 472 ) || is_page( 594 ) ) {
		    wp_enqueue_style( 'child', FL_CHILD_THEME_URL . '/child.css' );

		    //js
		    wp_enqueue_script( 'child', FL_CHILD_THEME_URL . '/js/child.js', array( 'jquery' ), '1.0', true );	
		}

    }
}