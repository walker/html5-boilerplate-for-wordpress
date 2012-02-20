	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory, if you can: mathiasbynens.be/notes/touch-icons -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
		Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
		for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<!-- We're doing it here, rather than footer, so that plugins have it available as they almost all bind to wp_head() -->
	<!-- They SHOULD start binding to wp_footer()!! -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/libs/jquery-1.7.1.min.js'>\x3C/script>")</script>
	
	<!-- Wordpress Head Items -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
