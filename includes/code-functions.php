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



    <span><p class="p_shortcode" style="background-color: #ddd;padding: 5px 12px 7px 12px;"><strong>Shortcode:</strong> <?=$shortcode?></p></span

    <?php

}

add_action('destination_term_new_form_tag', 'custom_content_shortcode_roteiros');
add_action('activities_term_new_form_tag', 'custom_content_shortcode_roteiros');
add_action('trip_types_term_new_form_tag', 'custom_content_shortcode_roteiros');

