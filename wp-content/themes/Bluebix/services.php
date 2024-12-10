<?php
/**
 * template name:services
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

<body class="service-details-page">

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
              <h1><?php echo get_field('service_detail-heading') ?></h1>
              <p class="mb-0"><?php echo get_field('service_detail-discription') ?></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php"><?php echo get_field('service_bedcrum-home') ?></a></li>
            <li class="current"><?php echo get_field('service_bedcrum-detail') ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-3 position_sticky" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4><?php echo get_field('service-list_txt') ?></h4>
              <?php while (have_rows('service-list_repeater')):
							the_row(); ?>
              <div class="services-list">
                <a href="#" ><i class="<?php echo get_sub_field('arrow_icon') ?>"></i><span><?php echo get_sub_field('service_categories') ?></span></a>
                
              </div>
              <?php endwhile; ?>
            </div><!-- End Services List -->


            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="<?php echo get_field('question_icon') ?>"></i>
              <h4><?php echo get_field('question-txt') ?></h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span><?php echo get_field('question_contact') ?></span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="<?php echo get_field('question-mail') ?>">contact@example.com</a></p>
            </div>

          </div>

          <div class="col-lg-9 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo get_field('service_img') ?>" alt="office img" class="img-fluid services-img">
            <h3><?php echo get_field('service_texts') ?></h3>
            <p>
            <?php echo get_field('service-discription') ?>
            </p>
            <?php while (have_rows('service_items-repeater')):
							the_row(); ?>
            <ul>
              <li><i class="<?php echo get_sub_field('check_item-icon') ?>"></i> <span><?php echo get_sub_field('check-texts') ?></span></li>
            </ul>
            <?php endwhile; ?>

            <p>
            <?php echo get_field('service-discription2') ?>
            </p>
            <p>
            <?php echo get_field('service-discription3') ?>
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

  
	<!--footer section-->
	<?php get_footer(); ?>
	<!--footer section end-->


</body>

</html>