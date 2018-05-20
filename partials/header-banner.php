<div class="container-fluid">
    <div class="row">
        <div class="header-container" <?php echo get_feature_image_as_bg()?>>
            <div class="entry-header clearfix text-center">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if ( is_single() ) { ?>
                    <p>by <?php echo get_the_author(); ?></p>
                <?php } elseif (is_front_page()) {?>
                    <p><?php bloginfo('description'); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>