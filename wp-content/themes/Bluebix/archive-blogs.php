<?php
/**
 * template name:Blogs
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


	<main class="main">

		<!-- Page Title -->
		<div class="page-title">
			<div class="heading">
				<div class="container">
					<div class="row d-flex justify-content-center text-center">
						<div class="col-lg-8">
							<h1>Blogs</h1>
							<p class="mb-0 bnr_styl emp_p">Odio et unde deleniti. Deserunt numquam exercitationem.
								Officiis quo odio
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
						<li class="current">Blog</li>
					</ol>
				</div>
			</nav>
		</div><!-- End Page Title -->

		<div class="container">
			<div class="row">

				<div class="col-lg-8">

					<!-- Blog Posts Section -->
					<section id="blog-posts" class="blog-posts section">
						<div class="container">
							<div class="row gy-4">
								<?php
								// Get the selected category from the query string
								$selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

								// Set up the query arguments
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$args = array(
									'post_type' => 'Blogs',
									'posts_per_page' => 4,
									'paged' => $paged,
									
								);


								// Add the category filter if a category is selected
								if (!empty($selected_category)) {
									$args['blogs-category'] = $selected_category;
								}

								// Run the query
								$query = new WP_Query($args);

								// Loop through the posts
								if ($query->have_posts()):
									while ($query->have_posts()):
										$query->the_post();
										?>
										<div class="col-12">
											<article>
												<div class="post-img">
													<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
														alt="<?php the_title(); ?>" class="img-fluid">
												</div>

												<h2 class="title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h2>

												<div class="meta-top">
													<ul>
														<li class="d-flex align-items-center">
															<i class="bi bi-person"></i>
															<a
																href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
																<?php the_author(); ?>
															</a>
														</li>
														<li class="d-flex align-items-center">
															<i class="bi bi-clock"></i>
															<a href="<?php the_permalink(); ?>">
																<time datetime="<?php echo get_the_date('c'); ?>">
																	<?php echo get_the_date(); ?>
																</time>
															</a>
														</li>
														<li class="d-flex align-items-center">
															<i class="bi bi-chat-dots"></i>
															<a href="<?php the_permalink(); ?>#comments">
																<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
															</a>
														</li>
													</ul>
												</div>

												<div class="content">
													<p>
														<?php echo wp_trim_words(get_the_content(), 50); ?>
													</p>
													<div class="read-more">
														<a href="<?php the_permalink(); ?>">Read More</a>
													</div>
												</div>
											</article>
										</div>
										<?php
									endwhile;



								else:
									echo '<p>No posts found.</p>';
								endif;

								// Reset post data
								wp_reset_postdata();
								?>

							</div><!-- End blog posts list -->
						</div>
					</section><!-- /Blog Posts Section -->

					<!-- Blog Pagination Section -->
					<section id="blog-pagination" class="blog-pagination page-numbers section">
						<div class="container">
							<div class="d-flex justify-content-center">
								<?php
								// Pagination
								$pagination_args = array(
									'total' => $query->max_num_pages,
									'current' => $paged,
									'prev_text' => __('« Previous'),
									'next_text' => __('Next »'),
									'type' => 'array',
								);
								$pages = paginate_links($pagination_args);

								if ($pages):
									echo '<ul>';
									foreach ($pages as $page) {
										// Add a custom class to each page number
										$page = str_replace('page-numbers', 'page-numbers custom-class', $page);

										// Remove aria-current attribute
										$page = preg_replace('/aria-current="page"/', '', $page);

										// Output the modified pagination link
										echo '<li>' . $page . '</li>';
									}
									echo '</ul>';
								endif;
								?>
							</div>
						</div>
					</section>


					<!-- /Blog Pagination Section -->

				</div>


				<div class="col-lg-4 sidebar">

					<div class="widgets-container">

						<!-- Search Widget -->
						<!-- Search Widget -->
						<div class="search-widget widget-item">
							<h3 class="widget-title">Search</h3>
							<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
								<input type="text" name="s" placeholder="Search for blogs."
									value="<?php echo esc_attr(get_search_query()); ?>" required>
								<input type="hidden" name="post_type" value="blogs">
								<button type="submit" title="Search"><i class="bi bi-search"></i></button>
							</form>



						</div>
						<!--/Search Widget -->

						<!-- Categories Widget -->
						<!-- Categories Widget -->
						<div class="categories-widget widget-item">
							<h3 class="widget-title">Categories</h3>
							<ul class="mt-3">
								<?php
								// Get terms for the 'blogs-category' taxonomy
								$categories = get_terms(array(
									'taxonomy' => 'blogs-category',
									'hide_empty' => true, // Show only categories with posts
								));

								if (!empty($categories) && !is_wp_error($categories)) {
									foreach ($categories as $category) {
										echo '<li><a href="' . esc_url(get_site_url()) . '/blogs?category=' . $category->slug . '">' . esc_html($category->name) . '</a></li>';
									}
								} else {
									echo '<li>No categories found.</li>';
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
								'post_type' => 'blogs',
								'numberposts' => 5,
								'post_status' => 'publish',
								'orderby' => 'date',
								'order' => 'DESC'
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
						</div><!--/Recent Posts Widget -->

						<!-- Tags Widget -->
						<!-- <div class="tags-widget widget-item">

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

						</div> -->
						<!--/Tags Widget -->

					</div>

				</div>

			</div>
		</div>

	</main>





	<!--footer section-->
	<?php get_footer(); ?>
	<!--footer section end-->
</body>

</html>