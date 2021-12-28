<?php
/*
Plugin Name: Bit Portfolio Plugin
Plugin URI: https://motiejus1.github.com/bit-porfolio-plugin
Description: Plugin which is required by Bit Portfolio Theme
Version: 1.0.0
Author: Destytojas
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: bit-portfolio-plugin
*/

function bit_portfolio_create_portfolio_items(){
    
    //portfolio = works
    register_post_type('works', array(
        'labels' => array(
            'name' => __('Works'),
            'singular_name' => __('Work')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'works'),
        'show_in_rest' => true,
    ));

}


add_action('init', 'bit_portfolio_create_portfolio_items' );