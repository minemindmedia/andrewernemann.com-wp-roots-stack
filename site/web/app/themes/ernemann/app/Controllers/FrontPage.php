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
}
