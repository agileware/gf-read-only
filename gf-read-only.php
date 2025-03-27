<?php
/**
 * Plugin Name: Gravity Forms Read Only
 * Plugin URI: https://github.com/agileware/gf-read-only
 * Description: Gravity Forms plugin that disables input fields which have a .gf_readonly CSS class. Based on https://docs.gravityforms.com/making-a-field-read-only/
 * Author: Agileware
 * Version: 1.0
 * Author URI: https://agileware.com.au
 * Text Domain: gf-read-only
 * Domain Path: /languages
 * Requires Plugins: gravityforms
 * 
 * Copyright (c) Agileware Pty Ltd (email : support@agileware.com.au)
 *
 * Gravity Forms Read Only is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Gravity Forms Read Only is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
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
