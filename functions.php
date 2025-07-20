<?php
function teesha_portfolio_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'teesha_portfolio_enqueue_scripts');
?>
