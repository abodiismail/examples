<?

//Включаем поддержку миниатюр
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(564, 294,false);
  }
  
//Подключаем сайтбар  
 if (function_exists('register_sidebar')) 
	register_sidebar();
	
	
//регистрируем произвольное меню в теме 
register_nav_menus(array(
	'top' => 'Верхнее меню'
	));
	

	
// Подключаем и регистрируем стили
function mytheme_static() {
    
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
	
    wp_register_style( 'mytheme-gallery-style', get_template_directory_uri() . '/css/gallery.css', array( 'mytheme-style' ), '20140118' ); 
	wp_enqueue_style( 'mytheme-gallery-style' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_static' );	


    
//Создаем шоткод
function bye_reader() {
	return '<h3>'.' До новых встеч , уважаемые читатели моего блога'.'</h3>';
}
add_shortcode ('bye', 'bye_reader');

?>