<?php
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'testimonial',
        'title'             => __('Testimonial'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => 'template-parts/block/content-testimonial.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));

    // register a event block.
    acf_register_block_type(array(
        'name'              => 'event',
        'title'             => __('Événement'),
        'description'       => __('Les événements de l\'orchestre'),
        'render_template'   => 'template-parts/block/event/content-event.php',
        'category'          => 'formatting',
        'icon'              => 'location-alt',
        'keywords'          => array( 'événement', 'concert' ),
        'enqueue_script'    => 'style.css',

    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}