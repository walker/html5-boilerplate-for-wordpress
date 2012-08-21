	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php echo versioned_resource('style.css'); ?>">

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
	<script>typeof Modernizr == 'object' || document.write("<script src='<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.1.min.js'>\x3C/script>")</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.8.0.min.js'>\x3C/script>")</script>

	<!-- Wordpress Head Items -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
