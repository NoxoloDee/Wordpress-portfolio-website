<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<div class="jumbotron"></div>
	<div id="primary" class="container">
		<div id="content" class="col-md-12" role="main">
			<?php
			
			if (have_posts()) :
			   while (have_posts()) :
			      the_post();
			         the_content();
			   endwhile;
			endif;
			//get_footer(); 
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

	<br clear="all"> 

<?php get_footer(); ?>




