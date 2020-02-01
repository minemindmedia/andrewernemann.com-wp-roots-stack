<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function towupsectionone()
    {
        $field = get_field('two_up_section_one');
        return (object) [
            'headingOne'     => $field['heading_one'] ?? null,
            'subheadingOne'        => $field['subheading_one'] ?? null,
            'buttonTextOne'     => $field['button_text_one'] ?? null,
            'buttonURLOne'     => $field['button_url_one'] ?? null,
            'headingTwo'     => $field['heading_two'] ?? null,
            'subheadingTwo'        => $field['subheading_two'] ?? null,
            'buttonTextTwo'     => $field['button_text_two'] ?? null,
            'buttonURLTwo'     => $field['button_url_two'] ?? null,
        ];
    }
    public function oneupsection()
    {
        $field = get_field('one_up_section');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'        => $field['content'] ?? null,
            'logo'     => $field['logo'] ?? null,
            'background'     => $field['background_image'] ?? null,
        ];
    }
    public function videosection()
    {
        $field = get_field('video_section');
        return (object) [
            'mp4'     => $field['mp4_video'] ?? null,
            'webm'        => $field['webm_video'] ?? null,
            'poster'        => $field['video_poster'] ?? null,
        ];
    }
    public function towupsectiontwo()
    {
        $field = get_field('two_up_section_two');
        return (object) [
            'headingOne'     => $field['heading_one'] ?? null,
            'subheadingOne'        => $field['subheading_one'] ?? null,
            'buttonTextOne'     => $field['button_text_one'] ?? null,
            'buttonURLOne'     => $field['button_url_one'] ?? null,
            'headingTwo'     => $field['heading_two'] ?? null,
            'subheadingTwo'        => $field['subheading_two'] ?? null,
            'buttonTextTwo'     => $field['button_text_two'] ?? null,
            'buttonURLTwo'     => $field['button_url_two'] ?? null,
            'report'     => $field['report_cover'] ?? null,
        ];
    }
    public function testimonials()
    {
      $testimonials = get_posts([
        'post_type' => 'testimonials',
        'posts_per_page' => '7'
      ]);
        return array_map(function ($post) {
            return [
            'testimonial' => get_field('testimonial', $post),
            'author' => get_field('testimonial_author', $post),
            ];
        }, $testimonials);
    }
    public function oneupsectiontwo()
    {
        $field = get_field('one_up_section_two');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'        => $field['content'] ?? null,
            'background'     => $field['background_image'] ?? null,
            'buttonText'     => $field['button_text'] ?? null,
            'buttonLink'     => $field['button_link'] ?? null,
        ];
    }
    public function oneupsectionthree()
    {
        $field = get_field('one_up_section_three');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'        => $field['content'] ?? null,
            'buttonText'     => $field['button_text'] ?? null,
            'buttonLink'     => $field['button_link'] ?? null,
        ];
    }
    public function press()
    {
      $press = get_posts([
        'post_type' => 'press',
        'posts_per_page' => '-1'
      ]);
        return array_map(function ($post) {
            return [
            'heading' => get_field('press_heading', $post),
            'source' => get_field('press_source', $post),
            'link' => get_field('press_link', $post),
            ];
        }, $press);
    }
}
