<?php 

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style( 'fons', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@400;500;600;700&family=Raleway:wght@700&display=swap');
    wp_enqueue_style( 'font-static', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com');

	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
?>