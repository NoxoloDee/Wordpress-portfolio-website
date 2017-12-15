<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage ayandamabuluart
 */
get_header(); ?>




<div class="container">

	<div class="jumbotron"></div>

	<div class="col-md-3_">
		<?php //get_sidebar() ?>
	</div>

	<div class="col-md-12">

		<?php while(have_posts()) : the_post(); ?>

		
		<?php the_content(); ?><br />

		<?php endwhile; ?>
	</div>

</div>




<?php get_footer(); ?>