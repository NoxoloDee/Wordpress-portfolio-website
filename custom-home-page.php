<?php /* Template Name: Custom-home-page */ ?>


<?php get_header(); ?>

<section id="intro-section">
    <div class="intro-section-text">
    <div>
        <h5>SOUTH AFRICAN CONTROVERSIAL ARTIST</h5>
        <h1>AYANDA MABULU ART</h1>
    </div>
        
    </div>
</section>

<section id="about-section">
    <div class="container_">
        <div class="about">
            <?php if ( is_active_sidebar( 'home_about_1' ) ) : ?>
                <div id="primary-sidebar_01" class="primary-sidebar widget-area" role="complementary">
                    <?php dynamic_sidebar( 'home_about_1' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>

        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="img-responsive" />
        </div>
        <div class="clearfix"></div>

        <div class="parallax bg1">
            
        </div>
    </div>
    
</section>

<section id="portfolio-section">
    <div class="container">
        <div class="portfolio">
            <?php if ( is_active_sidebar( 'home_port_' ) ) : ?>
                <div id="primary-sidebar_02" class="primary-sidebar widget-area" role="complementary">
                    <?php dynamic_sidebar( 'home_port_' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>

        <div class="gallery_grid">
            <?php echo do_shortcode("[FinalTilesGallery id='1']"); ?>

        </div>
    </div>
</section>

<section id="parallax-section">
    <div class="image-paragraph">
        <p> “being me is my inspiration and being a part of the Black community, being a part of the African Culture is my uniqueness.” </p>
    </div>
</section>

<section id="blog-section">
    <div class="container">
        <div class="recent-blog">
            <h2>Recent Blog</h2>
        </div>
    </div>
       

    <?php 
        // the query
        $the_query = new WP_Query( array('post_type' => 'post','posts_per_page' => 3)); 
    ?>
    <div class="row_">
        <div class="container">
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-4">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                        <h3> <?php the_title(); ?> </h3>
                        
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php __('No News'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    

</section>

<div id="primary" class="container">

<div class="clearfix" style="margin-top:80px"></div>



    <div class="col-md-3">
        <?php //get_sidebar('home'); ?>
    </div>

    <div class="col-md-9">
        <?php
            //while ( have_posts() ) : the_post();

            //the_title(); 

            //the_content();
            
            //End of the loop.
            //endwhile;
        ?>
    </div>
   
 
</div><!-- .content-area -->
 <?php get_footer(); ?>