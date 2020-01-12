<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_reports',true);
$freelancershub_reports_heading = $freelancershub_section_meta['freelancershub_reports_title'];
$freelancershub_reports_subheading = $freelancershub_section_meta['freelancershub_reports_subtitle'];

?>

<section class="project-section">
    <div class="container">
        <div class="section-title">
            <span>Project</span>
            <h3>Our Project For Client</h3>
        </div>

        <ul class="filter-menu">
            <li class="filter active" data-filter="all">All</li>
            <li class="filter" data-filter=".branding">Branding</li>
            <li class="filter" data-filter=".marketting">Marketing</li>
            <li class="filter" data-filter=".seo">SEO</li>
            <li class="filter" data-filter=".web">Web</li>
        </ul>

        <div id="Container" class="row">
            <div class="col-lg-4 col-md-6 mix branding">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/1.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix marketting">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/2.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix seo">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/3.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix web">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/4.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix branding">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/5.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mix marketting">
                <div class="single-project-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/6.jpg" alt="image">

                    <div class="project-hover-content">
                        <h3>
                            <a href="#"> Search Enginee Optimization</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>