<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
			<footer>
				<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'primary', 'fallback_cb' => false) ); ?>
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
		<script defer src="<?php echo versioned_resource('/js/script.js'); ?>"></script>
		<!-- end scripts-->
		
		<?php wp_footer(); ?>
		
		<!-- Change UA-XXXXX-X to be your site's ID -->
		<!-- If you're not using the Wordpress GA plugin, but use GA, use this embed code.
		<script>
			window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({
				load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
			});
		</script>-->
		
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
			<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
	</body>
</html>
