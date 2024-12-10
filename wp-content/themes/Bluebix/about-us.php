
<?php
/**
 * template name:about-us
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
    <section id="hero" class="about_hero section">
        <div class="white_layer"></div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><?php echo get_field('about_heading') ?> <span style="color: var(--sapphron-color);"><?php echo get_field('about_clr') ?> </span></h1>
            <p data-aos="fade-up" data-aos-delay="100"><?php echo get_field('about_discription') ?></p>
            
          </div>
          <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <!-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
          </div>
        </div>
      </div>

      

    </section>




   
  <!-- Features Section -->
  <section id="features" class="features section">

    <!-- Section Title -->
    <!-- <div class="container section-title" data-aos="fade-up">
      <p class="bor_bottom">Our Advacedd Features<br></p>
    </div> -->

    <div class="container">

      <div class="row gy-5 my-4">

        <div class="col-xl-6 my-auto">
            <div class="content">
                <h2><?php echo get_field('feature_text') ?></h2>
                <p>
                <?php echo get_field('feature_discription') ?>
                </p>
              </div>
          </div>

        <div class="col-xl-6 mt-0" data-aos="zoom-out" data-aos-delay="100">
          <img src="<?php echo get_field('feature_img') ?>" class="img-fluid" alt="feature_img">
        </div>

       

      </div>

      <div class="row gy-5 my-4">

        <div class="col-xl-6 mt-0" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo THEME_DIR_URI?>/assets/img/features.png" class="img-fluid" alt="">
          </div>

        <div class="col-xl-6 my-auto">
            <div class="content">
                <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                <p>
                  Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                </p>
              </div>
          </div>


       

      </div>

    </div>

  </section><!-- /Features Section -->
    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p class="bor_bottom"><?php echo get_field('testimonilas_title') ?><br></p>
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
          <?php while (have_rows('testimonials_repeater')):
							the_row(); ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p><?php echo get_sub_field('testimonial_discription') ?></p>
                <div class="profile mt-auto">
                  <h3><?php echo get_sub_field('testimonial_text') ?></h3>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
           


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>

  
  <!--footer section-->
	<?php get_footer(); ?>
	<!--footer section end-->

</body>

</html>