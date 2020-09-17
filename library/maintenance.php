<?php

// Activate WordPress Maintenance Mode
function wp_maintenance_mode(){
    if( !is_user_logged_in() ){
        /*wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance. We will be back on-line shortly!'); **/
               wp_redirect( esc_url_raw( home_url( 'index.php/countdown/' ) ), 301 );
                die();
    }
}
add_action('get_header', 'wp_maintenance_mode');


?>