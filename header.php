<?php
/**
* @package WordPress
* @subpackage HTML5_Boilerplate
*/
		// require head_top
		
		?>
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<?php
			// require head_bottom
			
		?>
		
		<div id="container">
			<header role="banner">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<p class="description"><?php bloginfo('description'); ?></p>
				<nav id="access" role="navigation">
					<h3 class="assistive-text"><?php _e( 'Main menu', 'html5-boilerplate-for-wordpress' ); ?></h3>
					<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
					<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'html5-boilerplate-for-wordpress' ); ?>"><?php _e( 'Skip to primary content', 'html5-boilerplate-for-wordpress' ); ?></a></div>
					<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'html5-boilerplate-for-wordpress' ); ?>"><?php _e( 'Skip to secondary content', 'html5-boilerplate-for-wordpress' ); ?></a></div>
					<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #access -->
			</header>
