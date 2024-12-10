<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<body class="blog-details-page">

	<!--header section-->
	<?php include_once('inc/nav.php'); ?>
	<!--header section-->

	<main class="main">

		<!-- Page Title -->
		<div class="page-title">
			<div class="heading">
				<div class="container">
					<div class="row d-flex justify-content-center text-center">
						<div class="col-lg-8">
							<h1>Blog Details</h1>
							<p class="mb-0 emp_p">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
								sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus
								dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
						</div>
					</div>
				</div>
			</div>
			<nav class="breadcrumbs">
				<div class="container">
					<ol>
						<li><a href="index.html">Home</a></li>
						<li class="current">Blog Details</li>
					</ol>
				</div>
			</nav>
		</div><!-- End Page Title -->

		<div class="container">
			<div class="row">

				<div class="col-lg-8">

					<!-- Blog Details Section -->
					<section id="blog-details" class="blog-details section">
						<div class="container">
							<?php if (have_posts()):
								while (have_posts()):
									the_post(); ?>
									<article class="article">
										<!-- Featured Image -->
										<div class="post-img">
											<?php if (has_post_thumbnail()): ?>
												<?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
											<?php endif; ?>
										</div>

										<!-- Post Title -->
										<h2 class="title"><?php the_title(); ?></h2>

										<!-- Meta Information -->
										<div class="meta-top">
											<ul>
												<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
														href="#"><?php the_author(); ?></a></li>
												<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
														href="#"><time
															datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time></a>
												</li>
												<li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
														href="#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
												</li>
											</ul>
										</div><!-- End meta top -->

										<!-- Post Content -->
										<div class="content">
											<?php the_content(); ?>
										</div><!-- End post content -->

										<!-- Post Categories and Tags -->
										<div class="meta-bottom">
											<i class="bi bi-folder"></i>
											<ul class="cats">
												<?php foreach (get_the_category() as $category): ?>
													<li><a
															href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
													</li>
												<?php endforeach; ?>
											</ul>

											<i class="bi bi-tags"></i>
											<ul class="tags">
												<?php
												$post_tags = get_the_tags();
												if ($post_tags):
													foreach ($post_tags as $tag):
														?>
														<li><a
																href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
														</li>
														<?php
													endforeach;
												endif;
												?>
											</ul>
										</div><!-- End meta bottom -->
									</article>
								<?php endwhile; else: ?>
								<p>No content found.</p>
							<?php endif; ?>
						</div>
					</section><!-- /Blog Details Section -->

					<!-- Blog Author Section -->
					<section id="blog-author" class="blog-author section">
						<div class="container">
							<div class="author-container d-flex align-items-center">
								<?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', ['class' => 'rounded-circle flex-shrink-0']); ?>
								<div>
									<h4><?php the_author(); ?></h4>
									<div class="social-links">
										<!-- Add social links dynamically if required -->
									</div>
									<p><?php the_author_meta('description'); ?></p>
								</div>
							</div>
						</div>
					</section><!-- /Blog Author Section -->

					

					<!-- Comment Form Section -->
					<section id="comment-form" class="comment-form section">
						<div class="container">

							<form action="">

								<h4>Post Comment</h4>
								<p>Your email address will not be published. Required fields are marked * </p>
								<div class="row">
									<div class="col-md-6 form-group">
										<input name="name" type="text" class="form-control" placeholder="Your Name*">
									</div>
									<div class="col-md-6 form-group">
										<input name="email" type="text" class="form-control" placeholder="Your Email*">
									</div>
								</div>
								<div class="row">
									<div class="col form-group">
										<input name="website" type="text" class="form-control"
											placeholder="Your Website">
									</div>
								</div>
								<div class="row">
									<div class="col form-group">
										<textarea name="comment" class="form-control"
											placeholder="Your Comment*"></textarea>
									</div>
								</div>

								<div class="text-center">
									<button type="submit" class="btn btn-primary">Post Comment</button>
								</div>

							</form>

						</div>
					</section><!-- /Comment Form Section -->

				</div>

				<div class="col-lg-4 sidebar">

					<div class="widgets-container">

						<!-- Search Widget -->
						<div class="search-widget widget-item">

							<h3 class="widget-title">Search</h3>
							<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
        <input type="text" name="s" placeholder="Search for categories..." required>
        <input type="hidden" name="post_type" value="post">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>

						</div><!--/Search Widget -->

						<!-- Categories Widget -->
						<div class="categories-widget widget-item">
							<h3 class="widget-title">Categories</h3>
							<ul class="mt-3">
								<?php
								$categories = get_categories();
								foreach ($categories as $category) {
									echo '<li><a href="' . esc_url(add_query_arg('category', esc_attr($category->slug), home_url())) . '">' . esc_html($category->name) . '</a></li>';
								}
								?>
							</ul>
						</div>
						<!--/Categories Widget -->

						<!-- Recent Posts Widget -->
						<div class="recent-posts-widget widget-item">
    <h3 class="widget-title">Recent Blogs</h3>
    <?php
    $recent_blogs = get_posts(array(
        'post_type'      => 'blogs', // Custom post type slug
        'numberposts'    => 5, // Number of blogs to display
        'post_status'    => 'publish', // Only published blogs
        'orderby'        => 'date', // Order by publication date
        'order'          => 'DESC' // Most recent first
    ));

    if (!empty($recent_blogs)) {
        foreach ($recent_blogs as $blog) {
            ?>
            <div class="post-item">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url($blog->ID, 'thumbnail')); ?>"
                    alt="<?php echo esc_attr($blog->post_title); ?>" class="flex-shrink-0">
                <div>
                    <h4>
                        <a href="<?php echo get_permalink($blog->ID); ?>">
                            <?php echo esc_html($blog->post_title); ?>
                        </a>
                    </h4>
                    <time datetime="<?php echo esc_attr(get_the_date('c', $blog->ID)); ?>">
                        <?php echo esc_html(get_the_date('', $blog->ID)); ?>
                    </time>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p>No recent blogs found.</p>';
    }
    ?>
</div>
<!-- End recent post item-->

						<div class="post-item">
							<img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
							<div>
								<h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
						</div><!-- End recent post item-->

						<div class="post-item">
							<img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
							<div>
								<h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a>
								</h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
						</div><!-- End recent post item-->

						<div class="post-item">
							<img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
							<div>
								<h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
						</div><!-- End recent post item-->

						<div class="post-item">
							<img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
							<div>
								<h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
								<time datetime="2020-01-01">Jan 1, 2020</time>
							</div>
						</div><!-- End recent post item-->

					</div><!--/Recent Posts Widget -->

					<!-- Tags Widget -->
					<div class="tags-widget widget-item">

						<h3 class="widget-title">Tags</h3>
						<ul>
							<li><a href="#">App</a></li>
							<li><a href="#">IT</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Mac</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Office</a></li>
							<li><a href="#">Creative</a></li>
							<li><a href="#">Studio</a></li>
							<li><a href="#">Smart</a></li>
							<li><a href="#">Tips</a></li>
							<li><a href="#">Marketing</a></li>
						</ul>

					</div><!--/Tags Widget -->

				</div>

			</div>

		</div>
		</div>

	</main>

	<?php get_footer(); ?>

</body>

</html>
