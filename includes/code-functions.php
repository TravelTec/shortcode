<?php 



/*

 * Add my new menu to the Admin Control Panel

 */



function custom_content_shortcode_roteiros() {

    if($_GET['taxonomy'] == 'activities'){ 
    $shortcode = '[WP_TRAVEL_ENGINE_ACTIVITIES]';
    }else if($_GET['taxonomy'] == 'destination'){ 
    $shortcode = '[WP_TRAVEL_ENGINE_DESTINATIONS]';
    }else if($_GET['taxonomy'] == 'trip_types'){ 
    $shortcode = '[WP_TRAVEL_ENGINE_TRIP_TYPES]';
      }

    ?>



    <span><input type="text" value="<?=$shortcode?>" id="myInput" style="width: 78%;background-color: #ddd;font-weight: 700;border: none;cursor: not-allowed;color:#72777c" onclick="copy_text()" placeholder="<?=$shortcode?>"> <button onclick="copy_text()" class="button button-secondary btn_copy_text">Copiar</button> </span

    <?php

}

add_action('destination_term_new_form_tag', 'custom_content_shortcode_roteiros');
add_action('activities_term_new_form_tag', 'custom_content_shortcode_roteiros');
add_action('trip_types_term_new_form_tag', 'custom_content_shortcode_roteiros');



function scripts_js() {
    wp_enqueue_script( 'jquery', plugins_url( '/assets/js/jquery-3.1.1.min.js', __FILE__ ));
    wp_enqueue_script( 'scripts-js', plugins_url( '/assets/js/scripts.js', __FILE__ ));
}

add_action('admin_init','scripts_js');
