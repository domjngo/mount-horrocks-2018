<?php if ( get_option( 'mh_title_1' ) ) { ?>
<section class="home-section section-intro">
    <div class="section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1><?php echo get_home_text('mh_title_1') ; ?></h1>
                    <p><?php echo get_home_text('mh_text_1') ; ?></p>
                    <?php echo get_button('mh_button_1', 'mh_url_1' ) ; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if ( get_option( 'mh_title_2' ) ) { ?>
    <section class="home-section section-img" <?php echo get_home_img( 'mh_img_url_2' ) ?>>
        <div class="section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2><?php echo get_home_text('mh_title_2'); ?></h2>
                        <p><?php echo get_home_text('mh_text_2'); ?></p>
                        <?php echo get_button('mh_button_2', 'mh_url_2' ) ; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if ( get_option( 'mh_title_3' ) ) { ?>
    <section class="home-section">
        <div class="section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php if ( get_option( 'mh_img_url_3' ) ) { ?>
                            <img src="<?php echo get_option( 'mh_img_url_3' ); ?>" class="img-responsive">
                        <?php } ?>
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo get_home_text('mh_title_3'); ?></h2>
                        <p><?php echo get_home_text('mh_text_3'); ?></p>
                        <?php echo get_button('mh_button_3', 'mh_url_3' ) ; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php if ( get_option( 'mh_title_4' ) ) { ?>
    <section class="home-section section-img" <?php echo get_home_img( 'mh_img_url_4' ) ?>>
        <div class="section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 text-right">
                        <h2><?php echo get_home_text('mh_title_4'); ?></h2>
                        <p><?php echo get_home_text('mh_text_4'); ?></p>
                        <?php echo get_button('mh_button_4', 'mh_url_4' ) ; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
