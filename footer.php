<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/aco-logo.png">
                </p>
                <p>
                    <a href="<?php echo get_option('g_facebook'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
                    <a href="<?php echo get_option('g_twitter'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a>
                    <a href="<?php echo get_option('g_instagram'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png"></a>
                </p>
                <?php echo get_option('g_tripadvisor'); ?>
            </div>
            <?php if ( is_active_sidebar( 'footer-col-1' ) ) { ?>
                <div class="footer-col col-md-4">
                    <ul>
                        <?php dynamic_sidebar( 'footer-col-1' ); ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if ( is_active_sidebar( 'footer-col-2' ) ) { ?>
                <div class="footer-col col-md-4">
                    <ul>
                        <?php dynamic_sidebar( 'footer-col-2' ); ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if ( is_active_sidebar( 'footer-col-3' ) ) { ?>
                <div class="footer-col col-md-4">
                    <ul>
                        <?php dynamic_sidebar( 'footer-col-3' ); ?>
                    </ul>
                </div>
            <?php } ?>
            <div class="col-md-12 text-center site-info">
                <h3><?php bloginfo('name'); ?></h3>
                <p><?php echo get_option('g_location'); ?></p>
                <p>
                    <small>Copyright © <?php echo date("Y"); ?> <br>
                        Website by <a href="http://chrisbishop.me.uk/" target="_blank">Chris Bishop</a></small>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>