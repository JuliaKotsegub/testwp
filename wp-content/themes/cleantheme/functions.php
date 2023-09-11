<?php 

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style( 'fons', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@400;500;600;700&family=Raleway:wght@700&display=swap');
    wp_enqueue_style( 'font-static', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com');

    wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/tabs.min.js', array('jquery'), '1.0.0', true );
}


add_theme_support('post-thubnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>