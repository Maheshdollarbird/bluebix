<?php 
// Product Custom Post Type
function create_custom_post_type_blogs() {
    // set up product labels
    $labels = array(
        'name' => 'Blogs',
        'singular_name' => 'Blog',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Blog',
        'edit_item' => 'Edit Blog',
        'new_item' => 'New Blog',
        'all_items' => 'All Blog',
        'view_item' => 'View Blog',
        'search_items' => 'Search Blog',
        'not_found' =>  'No Blogs Found',
        'not_found_in_trash' => 'No Blogs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Blogs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'blogs'),
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
    register_post_type( 'blogs', $args );
    
    $labels = array(
        'name'              => _x( 'Blogs Categories', 'phoronesis' ),
        'singular_name'     => _x( 'Blogs Category', 'phoronesis' ),
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
        'slug'                       => 'blogs-category',
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
    
    register_taxonomy( 'blogs-category', array( 'blogs' ) , $args );

   }
add_action( 'init', 'create_custom_post_type_blogs' );

add_action('wp_ajax_load_posts_by_ajax_blogs', 'load_posts_by_ajax_blogs_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_blogs', 'load_posts_by_ajax_blogs_callback');


  wp_reset_query();
  

?>