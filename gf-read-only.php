<?php
/**
 *
 * Plugin Name:  Gravity Forms Read Only
 * Plugin URI:   https://github.com/agileware/gf-read-only
 * Description:  Gravity Forms plugin that disables input fields which have a .gf_readonly CSS class. Based on https://docs.gravityforms.com/making-a-field-read-only/
 * Author:       Agileware
 * Version:      0.1
 * Author URI:   https://agileware.com.au
 *
 */


add_filter( 'gform_pre_render', function( $form ) {
    ?>
    <script type="text/javascript">
        jQuery(document).on('gform_post_render', function(){
            jQuery(".gf_readonly input").attr("readonly","readonly");
        });
    </script>
    <?php
    return $form;
  }
);
