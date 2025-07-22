<?php 

// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';

function custom_theme_styles() {
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/bulma.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');


// THEME SUPPORT
if ( function_exists( 'add_theme_support' ) ) {

    // Image Ratio
    add_image_size( '16-9', 800, 450, true );
    add_image_size( '16-9-large', 2000, 1125, true );
    add_image_size( '4-3', 800, 600, true );
    add_image_size( '4-3-large', 2000, 1500, true );
    add_image_size( '800x800', 800, 800, true );
    add_image_size( '600x250', 600, 250, true );
    add_image_size( 'portrait', 600, 800, true );

}
	


// Register Photography Custom Post Type and Genre Taxonomy
function register_photography_cpt() {

    // 1. Register the Custom Post Type: Photography
    $labels = array(
        'name'               => 'Photography',
        'singular_name'      => 'Photo',
        'menu_name'          => 'Photography',
        'name_admin_bar'     => 'Photo',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Photo',
        'new_item'           => 'New Photo',
        'edit_item'          => 'Edit Photo',
        'view_item'          => 'View Photo',
        'all_items'          => 'All Photos',
        'search_items'       => 'Search Photos',
        'not_found'          => 'No photos found.',
        'not_found_in_trash' => 'No photos found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'photography'),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true, 
        'menu_icon'          => 'dashicons-camera',
    );

    register_post_type('photography', $args);

    // 2. Register Custom Taxonomy: Genre
    $taxonomy_labels = array(
        'name'              => 'Genres',
        'singular_name'     => 'Genre',
        'search_items'      => 'Search Genres',
        'all_items'         => 'All Genres',
        'edit_item'         => 'Edit Genre',
        'update_item'       => 'Update Genre',
        'add_new_item'      => 'Add New Genre',
        'new_item_name'     => 'New Genre Name',
        'menu_name'         => 'Genres',
    );

    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'genre'),
        'show_in_rest'      => true,
    );

    register_taxonomy('genre', array('photography'), $taxonomy_args);

    // 3. Default taxonomy terms
    $default_terms = array('Sports', 'Wedding', 'Portraits');
    foreach ($default_terms as $term) {
        if (!term_exists($term, 'genre')) {
            wp_insert_term($term, 'genre');
        }
    }
}

add_action('init', 'register_photography_cpt');
