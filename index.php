<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage themename
 */
get_header(); ?>

<div class="container">

	<div class="jumbotron"></div>	
	<div class="row">

		<aside class="col-sm-3 ml-sm-auto blog-sidebar">
        	<div class="sidebar-module sidebar-module-inset">
            	<?php if ( is_active_sidebar( 'home_about_1' ) ) : ?>
                	<div id="primary-sidebar_01" class="primary-sidebar widget-area" role="complementary">
                    	<?php dynamic_sidebar( 'home_about_1' ); ?>
                	</div><!-- #primary-sidebar -->
            	<?php endif; ?>
          	</div>

         	<div class="sidebar-module">
            	<h4>Archives</h4>
            	<?php $args = array(
					'type'            => 'monthly',
					'limit'           => '',
					'format'          => 'html', 
					'before'          => '',
					'after'           => '',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC',
		        	'post_type'     => 'post'
				);
				wp_get_archives( $args ); ?>
          	</div>
          
          	<div class="sidebar-module">
            	<h4>Elsewhere</h4>
	            <ol class="list-unstyled">
	              <li><a href="#">GitHub</a></li>
	              <li><a href="#">Twitter</a></li>
	              <li><a href="#">Facebook</a></li>
	            </ol>
          	</div>
        </aside><!-- /.blog-sidebar -->

        <div class="col-sm-8 blog-main col-sm-offset-1">

        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="blog-post">
            		<h3 class="blog-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

            		<p class="blog-post-meta"><?php the_time('jS F, Y'); ?> by <a href="#"><?php the_author_posts_link(); ?></a></p>

            		<p><?php get_the_excerpt(); ?></p>
            		<hr>
            	
          		</div><!-- /.blog-post -->
	          <?php endwhile; else : ?>


			 	<!-- The very first "if" tested to see if there were any Posts to -->
			 	<!-- display.  This "else" part tells what do if there weren't any. -->
			 	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


			 	<!-- REALLY stop The Loop. -->
			 <?php endif; ?>

          
        </div><!-- /.blog-main -->

        

      </div>    
</div>



<?php get_footer(); ?>