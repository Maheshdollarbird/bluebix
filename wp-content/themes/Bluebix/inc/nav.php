<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?php echo home_url(); ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo ot_get_option('bluebix__logo'); ?>" alt="Bluebixhealthcare">
        <!-- <h1 class="sitename">Bluebixhealthcare</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?php echo home_url(); ?>" class="active">Home<br></a></li>
          <li><a href="<?php echo get_site_url(); ?>/about-us">About</a></li>
          <li class="dropdown"><a href="<?php echo get_site_url(); ?>/services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="services/Locum-Tenens-Staffing.html">Locum Tenens Staffing</a></li>
              <li><a href="services/Travel-Nurse-Staffing.html">Travel Nurse Staffing</a></li>
              <li><a href="services/Permanent-Direct-Hire-Staffing.html">Permanent / Direct Hire Staffing</a></li>
              <li><a href="services/PRN-Per-Diem-Staffing.html">PRN / Per-Diem Staffing </a></li>
              <li><a href="services/Allied-Health-Staffing.html">Allied Health Staffing</a></li>
              <li><a href="services/Executive-Search.html">Executive Search</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_site_url(); ?>/employers">Employers</a></li>
          <li><a href="<?php echo get_site_url(); ?>/job-seekers">Job Seekers</a></li>
          <li><a href="<?php echo get_site_url(); ?>/blogs">Blogs</a></li>
          <li><a href="<?php echo get_site_url(); ?>/jobs">Jobs</a></li>
          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Reach Us</a>

    </div>
  </header>