<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Bluebix
 * @since Bluebix 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
?>
<?php
get_header();

// Check if there are search results
if (have_posts()):
    echo '<h2>Search Results for: ' . esc_html(get_search_query()) . '</h2>';

    // Loop through the posts
    while (have_posts()): the_post();
        ?>
        <div class="blog-item">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
            <div>
                Categories:
                <?php
                // Display categories for the current blog post
                $categories = get_the_terms(get_the_ID(), 'blogs-category');
                if (!empty($categories)) {
                    foreach ($categories as $category) {
                        echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a> ';
                    }
                } else {
                    echo 'Uncategorized';
                }
                ?>
            </div>
        </div>
        <?php
    endwhile;

    // Pagination
    the_posts_pagination();

else:
    echo '<p>No blogs found matching your query.</p>';
endif;

get_footer();

