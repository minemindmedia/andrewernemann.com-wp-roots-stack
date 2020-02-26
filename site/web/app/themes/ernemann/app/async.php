<?php
/**
 * Async load CSS
 */
add_filter('style_loader_tag', function (string $html, string $handle): string {
    if ('development' === env('WP_ENV') || is_admin()) {
        return $html;
    }

    $dom = new \DOMDocument();
    $dom->loadHTML($html);
    $tag = $dom->getElementById($handle . '-css');
    $tag->setAttribute('media', 'print');
    $tag->setAttribute('onload', "this.media='all'");
    $tag->removeAttribute('type');
    $tag->removeAttribute('id');
    $html = $dom->saveHTML($tag);

    return $html;
}, 999, 2);

/**
 * Inject critical assets in head as early as possible
 */
add_action('wp_head', function (): void {
    if ('development' === env('WP_ENV')) {
        return;
    }

    if (is_front_page()) {
        // $critical_CSS = locate_asset('styles/critical-home.css');
        $critical_CSS = 'styles/critical-home.css';
    } elseif (is_singular()) {
        // $critical_CSS = locate_asset('styles/critical-singular.css');
        $critical_CSS = 'styles/critical-singular.css';
    } else {
        // $critical_CSS = locate_asset('styles/critical-landing.css');
        $critical_CSS = 'styles/critical-landing.css';
    }

    // if (file_exists($critical_CSS)) {
    if (file_exists(locate_asset($critical_CSS))) {
        echo '<style id="critical-css">' . get_file_contents($critical_CSS) . '</style>';
    }
}, 1);