<?php
define('JS_CSS_VER', '0.0.1');
define('DESCRIPTION_LENGTH', 40);
function quick_slug($s) { return sanitize_title(str_replace('/','-',$s)); }
// ------ ADDING STYLESHEETS ------
$stylesheets = array(

    'all'=>array(
        'bootstrap-theme.css',
        'bootstrap-theme.css.map',
        'bootstrap-theme.min.css',
        'bootstrap.css',
        'bootstrap.css.map',
        'bootstrap.min.css',
        'custom.css',
        'font-awesome.min.css',
    ),

    'lt_ie_9'=>array(),

    'gte_ie_9'=>array(),
);
add_action('wp_enqueue_scripts', 'add_stylesheets');
function add_stylesheets() {

    global $wp_styles;
    global $stylesheets;
    $css = array();

    foreach ( $stylesheets as $st ) {
    foreach ( $st as $s ) {

        $slug = quick_slug($s);
        wp_enqueue_style($slug, get_bloginfo('stylesheet_directory').'/css/'.$s, $css, JS_CSS_VER);
        array_push($css, $slug);
    } }

    foreach ($stylesheets['lt_ie_9'] as $s) {

        $wp_styles->add_data( quick_slug($s), 'conditional', 'lt IE 9' );
    }

    foreach ($stylesheets['gte_ie_9'] as $s) {

        $wp_styles->add_data( quick_slug($s), 'conditional', 'gte IE 9' );
    }

}
// ------ ADDING JAVASCRIPTS ------
$javascripts = array(

    'head'=>array(

        'all'=>array(
        ),

        'lt_ie_9'=>array(),

        'gte_ie_9'=>array(),
    ),

    'body'=>array(

        'all'=>array(
            'jquery.js',
            'bootstrap.js',
            'bootstrap.min.js',
            'classie.js',
            'modernizr.custom.js',
            'custom.js',
        ),

        'lt_ie_9'=>array(),

        'gte_ie_9'=>array(),
    ),
);
add_action('wp_enqueue_scripts', 'add_javascripts');
function add_javascripts(){

    global $wp_scripts;
    global $javascripts;
    $js = array();

    foreach ($javascripts['head'] as $ja) {
    foreach ($ja as $s) {

        $slug = quick_slug($s);
        wp_enqueue_script($slug, get_bloginfo('stylesheet_directory').'/javascripts/'.$s, $js, JS_CSS_VER);
        array_push($js, $slug);
    } }

    foreach ($javascripts['body'] as $ja) {
    foreach ($ja as $s) {

        $slug = quick_slug($s);
        wp_enqueue_script($slug, get_bloginfo('stylesheet_directory').'/javascripts/'.$s, $js, JS_CSS_VER, true);
        array_push($js, $slug);
    } }

    foreach (array_merge($javascripts['head']['lt_ie_9'],$javascripts['body']['lt_ie_9']) as $s) {

        $wp_scripts->add_data( quick_slug($s), 'conditional', 'lt IE 9' );
    }

    foreach (array_merge($javascripts['head']['gte_ie_9'],$javascripts['body']['gte_ie_9']) as $s) {

        $wp_scripts->add_data( quick_slug($s), 'conditional', 'gte IE 9' );
    }
}
// ------ PRE FUNCTION FOR DEBUGGING ------
function pre($a) { echo '<pre>'; print_r($a); echo '</pre>'; }
// ------ GLOBAL SMARTY FUNCTION ------
function wp_smarty(){

     global $wp_smarty;
    if(!$wp_smarty){

        $wp_smarty = smarty_get_instance();

        $options = get_fields('options');
        $wp_smarty->assign('options', $options);

        global $post;
        if ($post) {

            setup_postdata($post);

            // main-menu
            $header_menu = wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'echo' => false,
                'menu_id' => 'header-menu'
            ));

            $wp_smarty->assign('menu', $header_menu );

            $wp_smarty->assign('title', $post->post_title);
            $wp_smarty->assign('content', apply_filters('the_content', get_the_content() ));
        }
    }

    return $wp_smarty;
}
// ------ MENUS ------
add_action( 'init', 'create_menus' );
function create_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
// ------ CUSTOM POST TYPES ------
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'sample',
        array(
            'labels' => array(
                'name' => 'Sample',
                'singular_name' => 'Sample',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
};
// ------ IMAGE RESIZING ------
add_image_size( 'banner', 640, 200, true );
add_image_size( 'recipe-modal', 450, 200, true );
add_image_size( 'recipe-list', 175, 125, true );
// ------ /IMAGE RESIZING ------
// ------ FETCH FUNCTIONS ------
function fetch_page($page) {

    $q = new WP_Query(array( 'post_type' => 'page', 'name' => $page ));
    $posts = $q->posts;
    return fetch($posts[0]);

}
function fetch($post) {

    setup_postdata($post);

    $fields = array_merge( (array)$post, (array)get_fields($post->ID) );

    return $fields;
}
// custom admin login logo
// function custom_login_logo() {
//     echo '<style type="text/css">
//     h1 a {
//         background-image: url('.get_bloginfo('template_directory').'/images/black-logo.png) !important;
//         width: 100% !important;
//         background-size: 200px !important;
//     }
//     </style>';
// }
// add_action('login_head', 'custom_login_logo');