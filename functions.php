<?php
    function enqueue_name(){
        
        wp_register_style('reset', 'https://unpkg.com/destyle.css@3.0.2/destyle.min.css', array(), '1.0', false);
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array('reset'), '1.0.0');
        
        
   }
    add_action('wp_enqueue_scripts','enqueue_name');
?>