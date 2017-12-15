<!-- footer starts here -->

    <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				//do_action( 'twentyfifteen_credits' );
			?>
			<a target="_blank" href="<?php echo esc_url( __( 'https://ayandamabuluart.co.za/', 'ayandamabuluart' ) ); ?>"><?php echo date('Y') ?> Copyright </a>
		</div>
	</footer><!-- .site-footer -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" ></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" ></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php wp_footer(); ?>
    
    </body>
</html>