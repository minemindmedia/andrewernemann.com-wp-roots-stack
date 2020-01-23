<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});


/**
 * Disable Gutenburg Editor
 */
add_filter('use_block_editor_for_post', '__return_false', 10);


/**
 * Change the WordPress login header to the blog name.
 *
 * @return string
 */
add_filter('login_headertext', function () {
    return get_bloginfo('name');
});

/**
 * Remove admin footer text.
 *
 * @return bool
 */
add_filter('admin_footer_text', '__return_false', 100);

