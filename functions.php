<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

if(!function_exists('h5bp_setup')) {
	function h5bp_setup(){
		if(function_exists( 'register_nav_menu')) {
			add_theme_support('menus');
			register_nav_menu('primary', 'Primary Navigation');
			register_nav_menu('footer', 'Footer Navigation');
		}
		
		// Widgetized Sidebar HTML5 Markup
		if ( function_exists('register_sidebar') ) {
			register_sidebar(array(
				'before_widget' => '<section>',
				'after_widget' => '</section>',
				'before_title' => '<h2 class="widgettitle">',
				'after_title' => '</h2>',
			));
		}
		
		$locale = get_locale();
		$locale_file = TEMPLATEPATH . "/languages/$locale.php";
		if (is_readable( $locale_file ) )
			require_once( $locale_file );
		
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_custom_background();
		load_theme_textdomain( 'h5bp', TEMPLATEPATH . '/languages' );
		add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video'));
	}
}

add_action( 'after_setup_theme', 'h5bp_setup' );


// Custom HTML5 Comment Markup
if (!function_exists('mytheme_comment')) {
	function mytheme_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li>
			<article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<header class="comment-author vcard">
					<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
					<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
					<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
					<?php edit_comment_link(__('(Edit)'),'  ','') ?>
				</header>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Your comment is awaiting moderation.') ?></em>
					<br />
				<?php endif; ?>

				<?php comment_text() ?>

				<nav>
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</nav>
			</article>
		<!-- </li> is added by wordpress automatically -->
	<?php
	}
}

// Add ?v=[last modified time] to a file url
if(!function_exists('versioned_resource')) {
	function versioned_resource($relative_url){
		$file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
		$file_version = "";

		if(file_exists($file)) {
			$file_version = "?v=".filemtime($file);
		}

		return $relative_url.$file_version;
	}
}

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function h5bp_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'h5bp_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function h5bp_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'h5bp' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and h5bp_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function h5bp_auto_excerpt_more( $more ) {
	return ' &hellip;' . h5bp_continue_reading_link();
}
add_filter( 'excerpt_more', 'h5bp_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function h5bp_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= h5bp_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'h5bp_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function h5bp_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'h5bp_page_menu_args' );
