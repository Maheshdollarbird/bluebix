<?php
/**
 * template name:job-seekers
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

<body class="starter-page-page">

<header>

<?php include_once('inc/nav.php'); ?>

</header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Starter Page</li>
          </ol>
        </div>
      </nav>
      <div class="heading bg_hero">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1><?php echo get_field('job_seekers_title') ?></h1>
              <p class="mb-0 emp_p "><?php echo get_field('job-seekers_discription') ?></p>
            </div>
          </div>
        </div>
      </div>
      
    </div><!-- End Page Title -->

    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <p class="bor_bottom"><?php echo get_field('title_our_feature') ?><br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-6 aos-init aos-animate text-center m-auto" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo get_field('job_seeker_img') ?>" class="img-fluid feature_img" alt="">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">
            <?php while (have_rows('job_seeker-repeater')):
							the_row(); ?>
              <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="<?php echo get_sub_field('check_box-icon') ?>"></i>
                  <h3><?php echo get_sub_field('feature_item-text') ?></h3>
                </div>
              </div>
              <?php endwhile; ?>
              <!-- End Feature Item -->

              <!-- End Feature Item -->

            </div>
          </div>

        </div>

        <div class="row gy-5 my-4">
  
          <div class="col-xl-6 my-auto">
              <div class="content">
                  <h2><?php echo get_field('job-seeker_txt1') ?></h2>
                  <p>
                  <?php echo get_field('job_seeker_discription1') ?>
                  </p>
                </div>
            </div>
  
          <div class="col-xl-6 mt-0" data-aos="zoom-out" data-aos-delay="100">
            <img src="<?php echo get_field('job_seeker-img1') ?>" class="img-fluid" alt="">
          </div>
  
         
  
        </div>
  
        <div class="row gy-5 my-4">
  
          <div class="col-xl-6 mt-0" data-aos="zoom-out" data-aos-delay="100">
              <img src="<?php echo get_field('job-seeker_img2') ?>" class="img-fluid" alt="">
            </div>
  
          <div class="col-xl-6 my-auto">
              <div class="content">
                  <h2><?php echo get_field('job_seeker_txt2') ?></h2>
                  <p>
                  <?php echo get_field('job_seeker_discription2') ?>
                  </p>
                </div>
            </div>
  
  
         
  
        </div>

      </div>

    </section>

  </main>

  
  <?php get_footer(); ?>
</body>

</html>