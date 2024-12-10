<?php
/**
 * template name:home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage  Bluebix
 * @since  Bluebix 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>

</head>

<body class="index-page">

	<header>

		<?php include_once('inc/nav.php'); ?>

	</header>

	<main class="main">

		<!-- banner Section -->
		<section id="hero" class="hero section">

			<div class="container">
				<div class="row gy-4">
					<div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
						<h1 data-aos="fade-up"><?php echo get_field('banner_heading') ?><span
								style="color: var(--sapphron-color);"><?php echo get_field('txt_clr') ?></span></h1>

						<p data-aos="fade-up" data-aos-delay="100"><?php echo get_field('banner_discription') ?></p>
						<div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
							<a href="<?php echo get_field('get-start_btn') ?>"
								class="btn-get-started me-md-3 mb-2 mb-md-0">Get Started <i
									class="bi bi-arrow-right"></i></a>
							<a href="<?php echo get_field('job-seeker_btn') ?>" class="btn-get-started">Job seekers <i
									class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out">
						<!-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
					</div>
				</div>
			</div>



		</section>

		<!-- Stats Section -->
		<div id="stats" class="stats-section">
			<div class="stats">
				<div class="container" data-aos="fade-up" data-aos-delay="100">

					<div class="row gy-4 justify-content-center">

						<div class="col-6 col-md-4 col-lg-3">
							<div class="stats-item d-flex align-items-center w-100 h-100">
								<i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
								<div>
									<span data-purecounter-start="0" data-purecounter-end="150"
										data-purecounter-duration="1" class="purecounter"></span>
									<p>Happy Clients</p>
								</div>
							</div>
						</div><!-- End Stats Item -->

						<!--<div class="col-lg-3 col-md-6">-->
						<!--  <div class="stats-item d-flex align-items-center w-100 h-100">-->
						<!--    <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>-->
						<!--    <div>-->
						<!--      <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>-->
						<!--      <p>Projects</p>-->
						<!--    </div>-->
						<!--  </div>-->
						<!--</div>-->
						<!-- End Stats Item -->

						<div class="col-6 col-md-4 col-lg-3">
							<div class="stats-item d-flex align-items-center w-100 h-100">
								<i class="bi bi-headset color-green flex-shrink-0" style="color: #15be56;"></i>
								<div>
									<span data-purecounter-start="0" data-purecounter-end="1463"
										data-purecounter-duration="1" class="purecounter"></span>
									<p>Healthcare Provisions</p>
								</div>
							</div>
						</div><!-- End Stats Item -->

						<div class="col-6 col-md-4 col-lg-3">
							<div class="stats-item d-flex align-items-center w-100 h-100">
								<i class="bi bi-people color-pink flex-shrink-0" style="color: #bb0852;"></i>
								<div>
									<span data-purecounter-start="0" data-purecounter-end="15"
										data-purecounter-duration="1" class="purecounter"></span>
									<p>Industry Experience</p>
								</div>
							</div>
						</div><!-- End Stats Item -->

					</div>

				</div>
			</div>
		</div><!-- /Stats Section -->

		<!-- job seekers section -->
		<!-- <section id="jpbseekers" class="section job_seeker">
  <div class="container">
	<di class="row g-2">
	  <div class="col-md-5">
		<div class="" data-aos="fade-up" data-aos-delay="100">
		  <input type="text" name="name" class="form-control job_section_input" placeholder="Job title" required="">
		</div>
	  </div>
	  <div class="col-md-5">
		<div class="" data-aos="fade-up" data-aos-delay="100">
		  <input type="text" name="name" class="form-control job_section_input" placeholder="location" required="">
		</div>
	  </div>
	  <div class="col-md-2">
		<div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="100">
		  <a href="#" class="btn-get-started me-3 btn btn_sapphron btn_job">Find Jobs <i class="bi bi-search"></i></a>
		</div>
	  </div>
	</di>
  </div>
</section> -->
		<!-- job seekers section -->



		<!-- About Section -->
		<section id="about" class="about section">

			<div class="container" data-aos="fade-up">
				<div class="row gx-0">

					<div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
						data-aos-delay="200">
						<div class="content">
							<h3><?php echo get_field('who_we_are') ?></h3>
							<h2><?php echo get_field('about_h1') ?></h2>
							<p>
								<?php echo get_field('about_discription') ?>
							</p>

							<div class="text-center text-lg-start">
								<a href="about_read-more"
									class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Read More</span>
									<i class="bi bi-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
						<img src="<?php echo get_field('about_img') ?>" class="img-fluid" alt="">
					</div>

				</div>
			</div>

		</section><!-- /About Section -->

		<!-- Services Section -->
		<section id="services" class="services section">
			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<?php
				$section_title = get_field('section_title'); // Retrieve the title
				if ($section_title): ?>
					<p class="bor_bottom"><?php echo esc_html($section_title); ?><br></p>
				<?php endif; ?>
			</div><!-- End Section Title -->
			<!-- End Section Title -->

			<div class="container">

				<?php if (have_rows('service_items')): ?>
					<div class="row gy-4">
						<?php while (have_rows('service_items')):
							the_row();
							// Get repeater subfields
							$icon_class = get_sub_field('service_icon');
							$title = get_sub_field('service_title');
							$description = get_sub_field('service_description');
							$link = get_sub_field('service_link');
							$aos_delay = get_sub_field('aos_delay'); // Optional
							?>
							<div class="col-lg-4 col-md-6" data-aos="fade-up"
								data-aos-delay="<?php echo esc_attr($aos_delay); ?>">
								<div class="service-item item-sapphron position-relative">
									<i class="<?php echo esc_attr($icon_class); ?> icon"></i>
									<h3><?php echo esc_html($title); ?></h3>
									<p><?php echo esc_html($description); ?></p>
									<a href="<?php echo esc_url($link); ?>" class="read-more stretched-link">
										<span>Read More</span> <i class="bi bi-arrow-right"></i>
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>


			</div>

		</section><!-- /Services Section -->

		<!--  healthcard job Section -->
		<section id="values" class="values section">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<?php
				$health_heading = get_field('health_heading'); // Retrieve the title
				if ($health_heading): ?>
					<p class="bor_bottom"><?php echo esc_html($health_heading); ?><br></p>
				<?php endif; ?>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-4">
					<?php while (have_rows('job_cards')):
						the_row(); ?>
						<div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
							<div class="card">
								<img src="<?php echo get_sub_field('job_image') ?>" class="img-fluid" alt="">
								<h3><?php echo get_sub_field('job_title') ?></h3>
								<p><?php echo get_sub_field('job_description') ?></p>
								<a href="<?php echo get_sub_field('	job_link') ?>" class="btn-buy">Apply now</a>
							</div>
						</div>
					<?php endwhile; ?><!-- End Card Item -->

					<!-- End Card Item -->

				</div>

			</div>

		</section><!-- / healthcard job Section -->




		<!-- healthcard job Section -->
		<!-- <section id="healthcard" class="pricing section">

	<div class="container section-title" data-aos="fade-up">
	  <p class="bor_bottom">Healthcard Job Opportunities<br></p>
	</div>

	<div class="container">

	  <div class="row gy-4">

		<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
		  <div class="pricing-tem">
			<h3 class="text_sapphron">Health care job 1</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae fugiat, aliquid illo vero doloribus laboriosam minus beatae ab accusantium odit eum, iusto molestiae? Iste a eum quae debitis nostrum!</p>
			<a href="#" class="btn-buy">Apply now</a>
		  </div>
		</div>

		<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
		  <div class="pricing-tem">
			<h3 class="text_sapphron">Health care job 2</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae fugiat, aliquid illo vero doloribus laboriosam minus beatae ab accusantium odit eum, iusto molestiae? Iste a eum quae debitis nostrum!</p>
			<a href="#" class="btn-buy">Apply now</a>
		  </div>
		</div>

		<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
		  <div class="pricing-tem">
			<h3 class="text_sapphron">Health care job 3</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae fugiat, aliquid illo vero doloribus laboriosam minus beatae ab accusantium odit eum, iusto molestiae? Iste a eum quae debitis nostrum!</p>
			<a href="#" class="btn-buy">Apply now</a>
		  </div>
		</div>

		<div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
		  <div class="pricing-tem">
			<h3 class="text_sapphron">Health care job 4</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quae fugiat, aliquid illo vero doloribus laboriosam minus beatae ab accusantium odit eum, iusto molestiae? Iste a eum quae debitis nostrum!</p>
			<a href="#" class="btn-buy">Apply now</a>
		  </div>
		</div>

	  </div>

	</div>

  </section>  -->
		<!-- healthcard job Section -->






		<!-- Testimonials Section -->
		<section id="testimonials" class="testimonials section">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<?php
				$testimonials_heading = get_field('testimonials_heading');
				if ($testimonials_heading): ?>
					<p class="bor_bottom"><?php echo esc_html($testimonials_heading); ?><br></p>
				<?php endif; ?>
			</div><!-- End Section Title -->

			<div class="container" data-aos="fade-up" data-aos-delay="100">

				<div class="swiper init-swiper">
					<script type="application/json" class="swiper-config">
			{
			  "loop": true,
			  "speed": 600,
			  "autoplay": {
				"delay": 5000
			  },
			  "slidesPerView": "auto",
			  "pagination": {
				"el": ".swiper-pagination",
				"type": "bullets",
				"clickable": true
			  },
			  "breakpoints": {
				"320": {
				  "slidesPerView": 1,
				  "spaceBetween": 40
				},
				"1200": {
				  "slidesPerView": 3,
				  "spaceBetween": 1
				}
			  }
			}
		  </script>
					<div class="swiper-wrapper">
						<?php while (have_rows('testinomials_slider')):
							the_row(); ?>
							<div class="swiper-slide">
								<div class="testimonial-item">
									<p><?php echo get_sub_field('testinomials_txt') ?></p>
									<div class="profile mt-auto">
										<h3><?php echo get_sub_field('testinomial_name') ?></h3>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</section><!-- /Testimonials Section -->

		<!-- Recent Posts Section -->
		<section id="recent-posts" class="recent-posts section">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<p class="bor_bottom">Recent posts from our Blog</p>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-5">
					<?php
					// Fetch recent blogs
					$recent_blogs = new WP_Query(array(
						'post_type' => 'blogs', // Replace 'blogs' with your custom post type slug
						'posts_per_page' => 3, // Number of blogs to display
						'post_status' => 'publish', // Only published blogs
						'orderby' => 'date', // Order by latest date
						'order' => 'DESC' // Descending order
					));

					if ($recent_blogs->have_posts()):
						$delay = 100; // Animation delay counter
						while ($recent_blogs->have_posts()):
							$recent_blogs->the_post();
							?>
							<div class="col-xl-4 col-md-6">
								<div class="post-item position-relative h-100" data-aos="fade-up"
									data-aos-delay="<?php echo esc_attr($delay); ?>">

									<div class="post-img position-relative overflow-hidden">
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>"
												class="img-fluid" alt="<?php the_title_attribute(); ?>">
										<?php else: ?>
											<img src="<?php echo esc_url(THEME_DIR_URI . '/assets/img/default-thumbnail.jpg'); ?>"
												class="img-fluid" alt="Default Thumbnail">
										<?php endif; ?>
										<span class="post-date"><?php echo get_the_date('F d'); ?></span>
									</div>

									<div class="post-content d-flex flex-column">

										<h3 class="post-title"><?php the_title(); ?></h3>

										<div class="meta d-flex align-items-center">
											<p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
										</div>

										<hr>

										<a href="<?php the_permalink(); ?>" class="readmore stretched-link">
											<span>Read More</span>
											<i class="bi bi-arrow-right"></i>
										</a>

									</div>

								</div>
							</div><!-- End post item -->
							<?php
							$delay += 100; // Increment delay for animations
						endwhile;
						wp_reset_postdata(); // Reset post data
					else:
						?>
						<p class="text-center">No recent blogs available.</p>
					<?php endif; ?>
				</div>

			</div>

		</section>
		<!-- /Recent Posts Section -->


		<!-- Clients Section -->
		<section id="clients" class="clients section">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<p class="bor_bottom">We work with best clients<br></p>
			</div><!-- End Section Title -->

			<div class="container" data-aos="fade-up" data-aos-delay="100">

				<div class="swiper init-swiper">
					<script type="application/json" class="swiper-config">
			{
			  "loop": true,
			  "speed": 600,
			  "autoplay": {
				"delay": 5000
			  },
			  "slidesPerView": "auto",
			  "pagination": {
				"el": ".swiper-pagination",
				"type": "bullets",
				"clickable": true
			  },
			  "breakpoints": {
				"320": {
				  "slidesPerView": 2,
				  "spaceBetween": 40
				},
				"480": {
				  "slidesPerView": 3,
				  "spaceBetween": 60
				},
				"640": {
				  "slidesPerView": 4,
				  "spaceBetween": 80
				},
				"992": {
				  "slidesPerView": 6,
				  "spaceBetween": 120
				}
			  }
			}
		  </script>
					<div class="swiper-wrapper align-items-center">
						<?php while (have_rows('clients_logos')):
							the_row(); ?>
							<div class="swiper-slide"><img src="<?php echo get_sub_field('client_logo') ?>"
									class="img-fluid" alt=""></div>
						<?php endwhile; ?>

					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</section><!-- /Clients Section -->


		<!-- Contact Section -->
		<section id="contact" class="contact section">

			<!-- Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<p class="bor_bottom">Contact Us</p>
			</div><!-- End Section Title -->

			<div class="container" data-aos="fade-up" data-aos-delay="100">

				<div class="row gy-4">

					<div class="col-lg-6">

						<div class="row gy-4">
							<?php while (have_rows('contact_details')):
								the_row(); ?>
								<div class="col-md-6">

									<div class="info-item" data-aos="fade" data-aos-delay="200">
										<i class="<?php echo get_sub_field('contact_icon') ?>"></i>
										<h3><?php echo get_sub_field('contact_txt') ?></h3>
										<p><?php echo get_sub_field('contact_p1') ?></p>
										<p><?php echo get_sub_field('contact_p2') ?></p>
									</div>

								</div><!-- End Info Item -->
							<?php endwhile; ?>
							<<!-- End Info Item -->

						</div>

					</div>

					<div class="col-lg-6">
						<div class="wpcf7 js" id="wpcf7-f290-o1" lang="en-US" dir="ltr" data-wpcf7-id="290">
							<div class="screen-reader-response">
								<p role="status" aria-live="polite" aria-atomic="true"></p>
								<ul></ul>
							</div>
							<form action="/Bluebix_project/#wpcf7-f290-o1" method="post"
								class=" formValidation wpcf7-form init" aria-label="Contact form"
								novalidate="novalidate" data-status="init">
								<div style="display: none;">
									<input type="hidden" name="_wpcf7" value="290">
									<input type="hidden" name="_wpcf7_version" value="6.0.1">
									<input type="hidden" name="_wpcf7_locale" value="en_US">
									<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f290-o1">
									<input type="hidden" name="_wpcf7_container_post" value="0">
									<input type="hidden" name="_wpcf7_posted_data_hash" value="">
								</div>
								<div class="row gy-4">

									<div class="col-md-6">
										<input type="text" name="your-name" class="form-control" placeholder="Your Name"
											required data-bv-notempty-message="Please enter name">
									</div>

									<div class="col-md-6 ">
										<input type="email" class="form-control" name="your-email"
											placeholder="Your Email" required
											data-bv-notempty-message="Please enter email ID">
									</div>

									<div class="col-12">
										<input type="text" class="form-control" name="your-subject"
											placeholder="Subject" required data-bv-notempty-message="Please enter subject">
									</div>

									<div class="col-12">
										<textarea class="form-control" name="your-message" rows="6"
											placeholder="Message" required
											data-bv-notempty-message="Please enter message"></textarea>
									</div>

									<div class="col-12 text-center">
									<div class="form-group frm_btn">
											<button class="wpcf7-submit" type="submit">Submit</button>
											<div class="text-center mt-2">
												<span class="wpcf7-spinner"></span>
											</div>
										</div>
										<div class="wpcf7-response-output" aria-hidden="true"></div>
									</div>

								</div>
							</form>
						</div>
					</div><!-- End Contact Form -->
					
				</div>

			</div>

		</section>



	</main>
	
	<!--footer section-->
	<?php get_footer(); ?>
	<!--footer section end-->
	<script>
           
	</script>
</body>

</html>