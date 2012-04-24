<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
			<footer>
				<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'footer', 'fallback_cb' => false) ); ?>
				<p>
					<?php bloginfo('name'); ?> is proudly powered by
					<a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
					<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
					and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>
			</footer>
		</div> <!--! end of #container -->
		
		<!-- Javascript that is non-plugin related at the bottom for fast page loading -->
		<script defer src="<?php echo versioned_resource('/js/plugins.js'); ?>"></script>
		<script defer src="<?php echo versioned_resource('/js/main.js'); ?>"></script>
		<!-- end scripts-->
		
		<?php wp_footer(); ?>
		
		<!-- Change UA-XXXXX-X to be your site's ID -->
		<!-- If you're not using the Wordpress GA plugin, but use GA, use this embed code.
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>-->
	</body>
</html>
