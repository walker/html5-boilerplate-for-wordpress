<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

if(function_exists( 'register_nav_menu')) {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Navigation');
	register_nav_menu('footer', 'Footer Navigation');
}

// Custom HTML5 Comment Markup
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

add_theme_support( 'automatic-feed-links' );

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
	$file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
	$file_version = "";
	
	if(file_exists($file)) {
		$file_version = "?v=".filemtime($file);
	}
	
	return $relative_url.$file_version;
}