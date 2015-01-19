
	</div><!-- #container -->

	<div class="push"></div>

</div><!-- #wrapper -->

<footer id="colophon" role="contentinfo">
		<div id="site-generator">

			<?php echo __('&copy; ', 'newswire') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php if ( is_front_page() && ! is_paged() ) : ?>
            <?php _e('2015'); ?><?php _e(''); ?></a>
			
            <?php endif; ?>
            
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>