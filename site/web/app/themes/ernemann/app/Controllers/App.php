<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public function header()
    {
        return (object)array(
            'logo' => get_field('logo', 'options'),
            'hamburger' => get_field('hamburger_menu', 'options'),
            'arrow' => get_field('header_footer_arrow', 'options'),
            'phone' => get_field('phone_icon', 'options'),
            'email' => get_field('email_icon', 'options'),
            'close' => get_field('close_icon', 'options'),
            'overlay' => get_field('overlay_color', 'options'),
        );
    }
    public function headerhero()
    {
        $field = get_field('header_hero');
        return (object) [
            'background'     => $field['background_image'] ?? null,
            'heading'        => $field['heading'] ?? null,
            'subheading'     => $field['subheading'] ?? null,
        ];
    }

    public function headerheroOptions()
    {
        $field = get_field('header_hero', 'options');
        return (object) [
            'background'     => $field['background_image'] ?? null,
            'heading'        => $field['heading'] ?? null,
            'subheading'     => $field['subheading'] ?? null,
        ];
    }

    public function workWithUs()
    {
        $field = get_field('work_with_us', 'options');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'subheading'        => $field['subheading'] ?? null,
            'content'     => $field['content'] ?? null,
        ];
    }

    public function footerLogos()
    {
        $field = get_field('footer_logos', 'options');
        return (object) [
            'l1'     => $field['logo_one'] ?? null,
            'l2'        => $field['logo_two'] ?? null,
        ];
    }

    public function contactDetails()
    {
        $field = get_field('contact_details', 'options');
        return (object) [
            'phone'     => $field['phone_number'] ?? null,
            'email'        => $field['email_address'] ?? null,
            'address'        => $field['business_address'] ?? null,
            'copyright'        => $field['copyright'] ?? null,
        ];
    }

    public function finePrint()
    {
        $field = get_field('fine_print', 'options');
        return (object) [
            'content'     => $field['content'] ?? null,
        ];
    }

    public function reach()
    {
        $field = get_field('reach', 'options');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'     => $field['content'] ?? null,
            'logo'     => $field['logo'] ?? null,
            'btntxt'     => $field['button_text'] ?? null,
            'btnurl'     => $field['button_url'] ?? null,
        ];
    }

}