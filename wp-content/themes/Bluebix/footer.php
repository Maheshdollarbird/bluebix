<?php
/**
 * template name:footer
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Bluebix
 * @since Bluebix 1.0
 */

?>
	<footer id="footer" class="footer">

<div class="footer-newsletter">
  <div class="container">
	<div class="row justify-content-center text-center g-0">
	  <div class="col-lg-6">
		<div class="left_get_intouch">
		<h4>Looking for Talent?</h4>
		<a href="#about" class="btn-get-started">Get talent <i class="bi bi-arrow-right"></i></a>
	  </div>
	  </div>
	  <div class="col-lg-6">
		<div class="right_get_intouch">
		<h4>Looking for opportunity?</h4>
		<a href="#about" class="btn-get-started">Find Job<i class="bi bi-arrow-right"></i></a>
	  </div>
	  </div>
	</div>
  </div>
</div>

<div class="container footer-top">
  <div class="row gy-4">
	<div class="col-lg-3 col-md-4 footer-about">
	  <a href="<?php echo home_url(); ?>" class="d-flex align-items-center">
		<img src="<?php echo ot_get_option('bluebix_footer_logo'); ?>" alt="Bluebixhealthcare">
	  </a>
	  <div class="footer-contact pt-3">
		<p><?php echo ot_get_option('footer_logo_tag'); ?></p>
		</div>
	</div>

	<div class="col-lg-2 col-md-3 footer-links">
	  <h4>Quick Links</h4>
	  <ul>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Diversity</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Terms and condition</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
	  </ul>
	</div>
	<div class="col-lg-2 col-md-3 footer-links">
	  <h4>Quick Links</h4>
	  <ul>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Diversity</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Terms and condition</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
	  </ul>
	</div>
	<div class="col-lg-2 col-md-3 footer-links">
	  <h4>Quick Links</h4>
	  <ul>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Diversity</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Terms and condition</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
	  </ul>
	</div>
	<div class="col-lg-3 col-md-6 footer-about">
	  <a href="index.html" class="d-flex align-items-center">
		<span class="sitename">Get In Touch</span>
	  </a>
	  <div class="footer-contact pt-3">
		<p>A108 Adam Street</p>
		<p>New York, NY 535022</p>
		<p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
		<p><strong>Email:</strong> <span>info@example.com</span></p>
	  </div>
	</div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="sitename">Bluebix 2023</strong>, <span>All Rights Reserved</span></p>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo THEME_DIR_URI?>/assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?php echo THEME_DIR_URI ?>/assets/js/bootstrapValidator.min.js"></script>
	<script src="<?php echo THEME_DIR_URI ?>/assets/js/bluebix.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo THEME_DIR_URI?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo THEME_DIR_URI?>/assets/js/main.js"></script>		
<?php wp_footer(); ?>