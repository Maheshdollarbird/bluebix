<?php 
// Product Custom Post Type
function create_custom_post_type_services() {
    // set up product labels
    $labels = array(
        'name' => 'services',
        'singular_name' => 'service',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New service',
        'edit_item' => 'Edit service',
        'new_item' => 'New service',
        'all_items' => 'All service',
        'view_item' => 'View service',
        'search_items' => 'Search service',
        'not_found' =>  'No services Found',
        'not_found_in_trash' => 'No services found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'services',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'services'),
        'query_var' => true,
        'taxonomies' => array('post_tag','post'),
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'services', $args );
    
    $labels = array(
        'name'              => _x( 'services Categories', 'phoronesis' ),
        'singular_name'     => _x( 'services Category', 'phoronesis' ),
        'search_items'      => __( 'Search Category', 'phoronesis' ),
        'all_items'         => __( 'All Category', 'phoronesis' ),
        'parent_item'       => __( 'Parent Category', 'phoronesis' ),
        'parent_item_colon' => __( 'Parent Category:', 'phoronesis' ),
        'edit_item'         => __( 'Edit Category', 'phoronesis' ),
        'update_item'       => __( 'Update Category', 'phoronesis' ),
        'add_new_item'      => __( 'Add New Category', 'phoronesis' ),
        'new_item_name'     => __( 'New Category Name', 'phoronesis' ),
        'menu_name'         => __( 'Category', 'phoronesis' ),
    );
    
    $rewrite = array(
        'slug'                       => 'services-category',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite'                    => $rewrite,
    );
    
    register_taxonomy( 'services-category', array( 'services' ) , $args );

   }
add_action( 'init', 'create_custom_post_type_services' );

add_action('wp_ajax_load_posts_by_ajax_services', 'load_posts_by_ajax_services_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_services', 'load_posts_by_ajax_services_callback');


  wp_reset_query();
  

?>