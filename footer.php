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
        <script defer src="<?php echo versioned_resource('/js/plugins.js'); ?>"></script>
        <script defer src="<?php echo versioned_resource('/js/main.js'); ?>"></script>
        <?php wp_footer(); ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID and uncomment. -->
        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> -->
    </body>
</html>