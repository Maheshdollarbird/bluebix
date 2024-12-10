<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Bluebix
 * @since Bluebix 1.0
 */
?>
<!-- <head>
	<?php get_header(); ?>

</head>



	<header>

		<?php include_once('inc/nav.php'); ?>

	</header>

	<?php
get_header();
?>

<div class="container">
    <h1>Search Results</h1>

    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-12">
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="meta">
                            <span>By <?php the_author(); ?> on <?php echo get_the_date(); ?></span>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination(array(
                'prev_text' => 'Previous',
                'next_text' => 'Next',
            ));
            ?>
        </div>
    <?php else : ?>
        <p>No posts found. Try searching with a different term.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?> -->