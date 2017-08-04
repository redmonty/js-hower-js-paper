<?php
function enqueue_styles() {
 wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
 wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
 wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function libs_scripts_important()  
{  
    // Register the script like this for a theme:  
    wp_register_script( 'aos-script', get_template_directory_uri() . '/js/aos.js', array( 'jquery' ) );  
    // For either a plugin or a theme, you can then enqueue the script:  
    wp_enqueue_script( 'aos-script' );  
}  
add_action( 'wp_enqueue_scripts', 'libs_scripts_important' );
function enqueue_scripts () {
 wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
 wp_enqueue_script('html5-shim');

 // Register the script like this for a theme:  
 wp_register_script( 'custom-script', get_template_directory_uri() . '/js/main.js' );  
    // For either a plugin or a theme, you can then enqueue the script:  
 wp_enqueue_script( 'custom-script' );  

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function wptuts_styles_with_the_lot()  
{  
    wp_register_style( 'custom-style', get_template_directory_uri() . '/css/aos.css', array(), '20120208', 'all' );  
    // For either a plugin or a theme, you can then enqueue the style:  
    wp_enqueue_style( 'custom-style' );  
}  
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );

remove_filter('the_content', 'wpautop');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}


register_sidebar( array(
        'name' => __( 'Header', '' ),
        'id' => 'top-area',
        'description' => __( 'Шапка', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
));

// function start_scripts() {
// 	wp_enqueue_style( 'start-style', get_stylesheet_uri() );

// 	wp_register_style( 'main-js', get_template_directory_uri() . '/js/main.js' );
//         wp_enqueue_style( 'main-js' );

//         wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
// 	wp_enqueue_style( 'fontawesome' );


// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'start_scripts' );