<?php
/**
 * The template for displaying all single jobs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-job
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


    <section class="job_section">
        <div class="job_banner">
            <div class="bg_banner">
                <div class="text-center">
                    <div class="pad_head">
                        <h1 class="job_heading"> <?php echo get_field('job_detail-heading') ?></h1>
                        <p class="job_txt mb-3"><?php echo get_field('job_detail-discription') ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <!--form section-->
        <div class="form_div mx-5 mb-5">
            <div class="bg_form">
                <form action="<?php echo esc_url(get_permalink()); ?>" method="GET">
                    <div class="row p-5">
                        <div class="job_form d-flex">
                            <div class="col-md-6 p-3">
                                <input type="text" name="job_title" class="form-control" placeholder="Job Title"
                                    value="<?php echo isset($_GET['job_title']) ? esc_attr($_GET['job_title']) : ''; ?>">
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="job_location" class="form-control" placeholder="City or State"
                                    value="<?php echo isset($_GET['job_location']) ? esc_attr($_GET['job_location']) : ''; ?>">
                            </div>
                        </div>
                        <div class="text-center search_pad mb-3">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>
    <!--job details-->

    <section class="job-details">
        <div class="job_details px-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-div p-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="brand_style">Brands</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label check_txt" for="defaultCheck1">
                                        Signature
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label check_txt" for="defaultCheck2">
                                        Bluebix
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-div p-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="brand_style">Job Type</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label check_txt" for="defaultCheck1">
                                        Contract
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label check_txt" for="defaultCheck2">
                                        Permanant
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--check card end-->
                <!--Job Details-->
                <div class="col-md-8">
    <div class="job_detail">
        <div class="loop-div">
            <?php
            $search_title = isset($_GET['job_title']) ? sanitize_text_field($_GET['job_title']) : '';
            $search_location = isset($_GET['job_location']) ? sanitize_text_field($_GET['job_location']) : '';
            $found_jobs = false;

            if (have_rows('job-detail')) :
                while (have_rows('job-detail')) : the_row();
                    $job_title = get_sub_field('job-title');
                    $job_location = get_sub_field('job-location');
                    $row_index = get_row_index(); // Unique index for each row

                    if (
                        (!$search_title || stripos($job_title, $search_title) !== false) &&
                        (!$search_location || stripos($job_location, $search_location) !== false)
                    ) :
                        $found_jobs = true;
            ?>
                        <div class="job-item mb-5">
                            <h2 class="job_title"><?php echo (get_sub_field('job-type_tittle')); ?></h2>
                            <p><?php echo($job_location); ?></p>
                            <ul class="no-bullets">
                                <li><?php echo ($job_title); ?></li>
                                <li><?php echo get_sub_field('job-type'); ?></li>
                                <li><?php echo get_sub_field('job_location-area'); ?></li>
                                <li><?php echo get_sub_field('job-duration'); ?></li>
                            </ul>
                            <ul class="job-skill">
                                <li class="mb-2"><?php echo get_sub_field('job-skills'); ?></li>
                                <li><?php echo get_sub_field('job-responsibilties');?></li>
                            </ul>
                            <div class="apply_btn text-center my-5">
                                <button type="button" class="btn btn-primary open-modal"
                                    data-modal-id="jobModal-<?php echo $row_index; ?>">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                        <!-- Modal for this Job -->
                        <div class="modal" id="jobModal-<?php echo $row_index; ?>">
                            <div class="modal-content">
                                <div class="text-end">
                                    <button class="close-modal" data-modal-id="jobModal-<?php echo $row_index; ?>">&times;</button>
                                </div>
                                <div class="job-form-container">
                                    <form action="/submit-application" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="job-title">Job Title</label>
                                            <input type="text" id="job-title" name="job-title" placeholder="Enter Job Title" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="resume">Upload Your Resume</label>
                                            <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit">Submit Application</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            <?php
                    endif;
                endwhile;
            endif;

            if (!$found_jobs) :
                echo '<p>No jobs found matching your criteria.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

                </div>

                <!-- JavaScript -->

            </div>
        </div>
        </div>
        </div>
    </section>

    <?php get_footer(); ?>
    <script>
    // Open Modal
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-id');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "flex";
            }
        });
    });

    // Close Modal
    document.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-id');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = "none";
            }
        });
    });

    // Close Modal on Outside Click
    window.addEventListener('click', event => {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = "none";
        }
    });
</script>

</body>

</html>