<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'slick-carousel' . 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

// About
add_action('init', 'about');
function about() {
    $labels = array(
        'name' => __( 'Quienes Somos' ),
        'singular_name' => __( 'About Sección' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir Nueva Sección' ),
        'edit_item' => __( 'Editar Sección' ),
        'new_item' => __( 'Nueva Sección'),
        'view_item' => __( 'Ver Producto'),
        'search_items' => __( 'Buscar Producto'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-generic',
        'public' => true,
        'rewrite' => array( 'slug' => 'about' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
//         'taxonomies' => array( 'category' ),
        'supports' => array('title','thumbnail')
    );
    register_post_type( 'about' , $args );
    flush_rewrite_rules();
}
// // wemake -- Que Hacemos
// add_action('init', 'wemake');
// function wemake() {
//     $labels = array(
//         'name' => __( 'Que Hacemos' ),
//         'singular_name' => __( 'wemake' ),
//         'add_new' => __( 'Añadir Nuevo' ),
//         'add_new_item' => __( 'Añadir Nueva Sección' ),
//         'edit_item' => __( 'Editar Sección' ),
//         'new_item' => __( 'Nueva Sección'),
//         'view_item' => __( 'Ver Sección'),
//         'search_items' => __( 'Buscar Producto'),
//         'not_found' =>  __('No se encontró nada'),
//         'not_found_in_trash' => __('No se encontró nada en la papelera'),
//         'parent_item_colon' => ''
//     );
//     $args = array(
//         'labels' => $labels,
//         'menu_icon' => 'dashicons-admin-generic',
//         'public' => true,
//         'rewrite' => array( 'slug' => 'wemake' ),
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'menu_position' => null,
//         //'taxonomies' => array( 'category' ),
//         'supports' => array('title','thumbnail')
//     );
//     register_post_type( 'wemake' , $args );
//     flush_rewrite_rules();
// }
// // Servicios services
// add_action('init', 'services');
// function services() {
//     $labels = array(
//         'name' => __( 'Servicios' ),
//         'singular_name' => __( 'services' ),
//         'add_new' => __( 'Añadir Nuevo' ),
//         'add_new_item' => __( 'Añadir Nueva Servicio' ),
//         'edit_item' => __( 'Editar Servicio' ),
//         'new_item' => __( 'Nueva Servicio'),
//         'view_item' => __( 'Ver Servicio'),
//         'search_items' => __( 'Buscar Servicio'),
//         'not_found' =>  __('No se encontró nada'),
//         'not_found_in_trash' => __('No se encontró nada en la papelera'),
//         'parent_item_colon' => ''
//     );
//     $args = array(
//         'labels' => $labels,
//         'menu_icon' => 'dashicons-admin-generic',
//         'public' => true,
//         'rewrite' => array( 'slug' => 'services' ),
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'menu_position' => null,
//         'taxonomies' => array( 'category' ),
//         'supports' => array('title','thumbnail')
//     );
//     register_post_type( 'services' , $args );
//     flush_rewrite_rules();
// }

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

if ( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title'    => __('Prefooter', 'WorkIn'),
        'menu_title'    => __('Prefooter', 'WorkIn'),
        'menu_slug'     => 'theme-work-in',
        'capability'    => 'manage_options',
        'redirect'  => false,
        'rewrite' => array( 'slug' => 'about' ),
    ));

    $page = acf_add_options_page(array(
        'page_title'    => __('Configuración General', 'WebSite'),
        'menu_title'    => __('Información General website', 'WebSite'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'redirect'  => false
    ));
}
