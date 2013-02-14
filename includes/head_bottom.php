
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory, if you can and remove the following two links -->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">

        <!-- Wordpress Head Items -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <script>typeof Modernizr == 'object' || document.write("<script src='<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js'>\x3C/script>")</script>
        <script>window.jQuery || document.write("<script src='<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js'>\x3C/script>")</script>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
