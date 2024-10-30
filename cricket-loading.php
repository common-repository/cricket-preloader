<?php

/*
Plugin Name: Cricket Preloader
Plugin URI: http://bdtheme.net/
Description: This is a simple WordPress plugin, to show Cricket preloader before loading full content of your website.
Author: kamal Hossain
Version: 1.0
Author URI: http://bdtheme.net/
License: GPL
Tags: Cricket ,Cricket world cup, Cricket preloader, pre-loader, pre loader,  Cricket preloader plugin, simple preloader, css3 preloader, animated preloader.
 */


function cricket_pre_loader_content(){
    echo 
        '<div id="loader">'.
                   
                    '<div id="cricket">'.
                    '<div id="player">'.
                        '<div id="playermove"></div>'.
                    '</div>'.
                    '<div id="playerloader">'.
                        '<div id="ball"></div>'.
                        '<div id="ballcircle"></div>'.
                    '</div>'.
                '</div>'.
                
        '</div>';
}

add_action( 'wp_footer', 'cricket_pre_loader_content');
/* Preloader css added code */
function cricket_enqueue_css(){
    $css_url = plugins_url('/css/style.css', __FILE__);
     wp_enqueue_style( 'cricket-css', $css_url );
}

add_action('wp_enqueue_scripts', 'cricket_enqueue_css');

/* Preloader Script added code */
function cricket_preloader_activation() {
?>
	<script>
		jQuery(window).load(function() {
			jQuery("#loader").delay(550).fadeOut("slow");
		});
	</script>
<?php
}
add_action ('wp_footer', 'cricket_preloader_activation',100);



?>
