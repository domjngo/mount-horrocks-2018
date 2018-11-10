<?php
/**
 * Theme options
 */

function mount_settings_menu() {
    add_menu_page( 'Mount Horrocks settings', 'MH Settings', 'administrator', 'mount-settings-page', 'mount_settings_page', 'dashicons-admin-generic', 21  );
    add_action( 'admin_init', 'mount_settings_page_admin' );
}

function mount_settings_page_admin() {

    for ( $i=1 ; $i<=3 ; $i++ ) {
        register_setting( 'gsp-group', 'g_quote_'.$i );
        register_setting( 'gsp-group', 'g_source_'.$i );
        register_setting( 'gsp-group', 'g_image_'.$i );
    }
}

function mount_settings_page() {
    if (!current_user_can('administrator'))  {
        wp_die( __('You do not have sufficient pilchards to access this page.')    );
    }
    ?>
    <style>
        .g-admin input[type=text] {
            width: 100%;
            max-width: 320px;
        }
        .g-admin textarea {
            width: 100%;
            max-width: 320px;
            height: 12em;
        }
    </style>
    <div class="wrap g-admin">
        <h1>Mount Horrocks theme settings</h1>
        <form method="post" action="options.php" novalidate="novalidate">
            <?php settings_fields( 'gsp-group' ); ?>
            <?php do_settings_sections( 'gsp-group' ); ?>

            <h2>Homepage slider</h2>
            <?php for ( $i=1 ; $i<=3 ; $i++ ) { ?>
                <hr>
                <h3>Slide <?php echo $i; ?> </h3>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row"><label for="g_quote_<?php echo $i; ?>">Quote</label></th>
                        <td><textarea name="g_quote_<?php echo $i; ?>"><?php echo esc_attr( get_option('g_quote_'.$i) ); ?></textarea></td>
                        <td>28 words max</td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="g_source_<?php echo $i; ?>">Quote source</label></th>
                        <td><input type="text" name="g_source_<?php echo $i; ?>" value="<?php echo esc_attr( get_option('g_source_'.$i) ); ?>" /></td>
                        <td>9 words max</td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"><label for="g_image_<?php echo $i; ?>">Image URL</label></th>
                        <td><input type="text" name="g_image_<?php echo $i; ?>" value="<?php echo get_option('g_image_'.$i); ?>" /></td>
                        <td>Image size 1240px x 360px max</td>
                    </tr>
                </table>
            <?php } ?>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
