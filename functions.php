<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.css' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
  // add_theme_support('custom-logo');
	add_theme_support('custom-logo', array(
    'width' => 46,
    'height' => 71,
));
?>