<?php

?>

<div class="blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'home_right_1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
          </div>

          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
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
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Social</h4>
            <ol class="list-unstyled">
              <li><a href="#">Youtube</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>