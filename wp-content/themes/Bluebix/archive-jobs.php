<?php
/**
 * template name:jobs
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Bluebix
 * @since Bluebix 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>

</head>

<body>
    <header>

        <?php include_once('inc/nav.php'); ?>

    </header>

    <!--job cards-->
    <section class="job_cards">
        <div class="row p-4">
            <?php
            // Query to fetch "Jobs" custom posts
            $jobs_query = new WP_Query(array(
                'post_type' => 'jobs',
                'posts_per_page' => 3,
            ));


            if ($jobs_query->have_posts()):
                while ($jobs_query->have_posts()):
                    $jobs_query->the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-3 health_card">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <!-- Job Icon -->
                                    <img class="jobs_icon" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                        alt="<?php the_title(); ?>" class="img-fluid">
                                </div>
                                <!-- Job Title -->
                                <h4 class="card_head mb-2"><?php the_title(); ?></h4>
                                <!-- Job Description -->
                                <p class="card-text card-txt"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
                                <div class="text-end p-3">
                                    <!-- Job Link -->
                                    <a href="<?php echo get_permalink(); ?>" class="card-link">
                                        <img src="<?php echo get_field('next_icon') ?>" alt="Next">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Reset global post data
            else:
                ?>
                <p>No jobs available.</p>
            <?php endif; ?>
        </div>


    </section>





    <!--footer section-->
    <?php get_footer(); ?>
    <!--footer section end-->
</body>

</html>