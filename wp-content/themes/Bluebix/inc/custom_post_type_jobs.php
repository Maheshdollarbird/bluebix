<?php 
// Product Custom Post Type
function create_custom_post_type_jobs() {
    // set up product labels
    $labels = array(
        'name' => 'jobs',
        'singular_name' => 'job',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New job',
        'edit_item' => 'Edit job',
        'new_item' => 'New job',
        'all_items' => 'All job',
        'view_item' => 'View job',
        'search_items' => 'Search job',
        'not_found' =>  'No jobs Found',
        'not_found_in_trash' => 'No jobs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'jobs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'jobs'),
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
    register_post_type( 'jobs', $args );
    
    $labels = array(
        'name'              => _x( 'jobs Categories', 'phoronesis' ),
        'singular_name'     => _x( 'jobs Category', 'phoronesis' ),
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
        'slug'                       => 'jobs-category',
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
    
    register_taxonomy( 'jobs-category', array( 'jobs' ) , $args );

   }
add_action( 'init', 'create_custom_post_type_jobs' );

add_action('wp_ajax_load_posts_by_ajax_jobs', 'load_posts_by_ajax_jobs_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_jobs', 'load_posts_by_ajax_jobs_callback');


  wp_reset_query();
  

?>