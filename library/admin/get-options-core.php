<?php
//Get Layout Options
global $layout_options;
foreach ($layout_options as $value) {
    if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] = get_option( $value['id'] ); }
    }

?>