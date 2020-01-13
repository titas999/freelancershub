<?php
global $freelancershub_section_id;
$freelancershub_section_meta = get_post_meta($freelancershub_section_id,'freelancershub_section_projects',true);
$freelancershub_reports_heading = $freelancershub_section_meta['freelancershub_projects_title'];
$freelancershub_reports_subheading = $freelancershub_section_meta['freelancershub_projects_subtitle'];

?>

<section class="project-section">
    <div class="container">
        <div class="section-title">
            <?php if ($freelancershub_reports_heading){ ?>
            <span><?php echo esc_html($freelancershub_reports_subheading);?></span>
            <h3><?php echo esc_html($freelancershub_reports_heading);?></h3>
            <?php } ?>
        </div>

        <ul class="filter-menu">
            <li class="filter active" data-filter="all">All</li>
            <?php
            $terms = get_terms("category"); // get all categories, but you can use any taxonomy
            $count = count($terms); //How many are they?
            if ( $count > 0 ){  //If there are more than 0 terms
                foreach ( $terms as $term ) {  //for each term:
                    echo "<li class=\"filter\" data-filter='.".$term->slug."'>" . $term->name . "</li>\n";
                }
            }
            ?>
        </ul>

        <div id="Container" class="row">
            <?php
            $args = array(
                'post_type'           => 'portfolio',
                'posts_per_page'      => 9,
            );
            $query = new WP_Query( $args );
            if ($query->have_posts() ):
            while ( $query->have_posts() ) :
            $query->the_post();
            $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
            $termsString = ""; //initialize the string that will contain the terms
            foreach ( $termsArray as $term ) { // for each term
                $termsString .= $term->slug.' '; //create a string that has all the slugs
            }
            ?>
            <div class="col-lg-4 col-md-6 mix <?php echo $termsString; ?>">
                <div class="single-project-box">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <div class="project-hover-content">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>