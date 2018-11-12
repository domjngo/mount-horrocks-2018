<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/aco-logo.png"></a>
                </p>
                <p>
                    <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
                    <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a>
                    <a href="#" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png"></a>
                </p>
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
                <p>Auburn, Clare Valley, South Australia</p>
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