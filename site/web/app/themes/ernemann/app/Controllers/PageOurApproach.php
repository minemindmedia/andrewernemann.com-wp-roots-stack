<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageOurApproach extends Controller
{

    public function twoUpSection()
    {
        $field = get_field('two_up_section');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'     => $field['content'] ?? null,
            'heading_2'     => $field['heading_2'] ?? null,
            'content_2'     => $field['content_2'] ?? null,
        ];
    }

    public function video()
    {
        $field = get_field('video_section');
        return (object) [
            'mp4'     => $field['mp4'] ?? null,
            'webm'     => $field['webm'] ?? null,
            'poster'     => $field['poster'] ?? null,
        ];
    }

    public function statement()
    {
        $field = get_field('statement');
        return (object) [
            'content'     => $field['content'] ?? null,
        ];
    }

    public function tabs()
    {
        $field = get_field('tabs');
        return (object) [
            'one_title'     => $field['tab_title_1'] ?? null,
            'one_l'     => $field['tab_1_left'] ?? null,
            'one_r'     => $field['tab_1_right'] ?? null,
            'two_title'     => $field['tab_title_2'] ?? null,
            'two_l'     => $field['tab_2_left'] ?? null,
            'two_r'     => $field['tab_2_right'] ?? null,
            'three_title'     => $field['tab_title_3'] ?? null,
            'three_l'     => $field['tab_3_left'] ?? null,
            'three_r'     => $field['tab_3_right'] ?? null,
        ];
    }

    public function covered()
    {
        $field = get_field('covered');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'     => $field['content'] ?? null,
            'disclaimer'     => $field['disclaimer'] ?? null,
            'background'     => $field['background'] ?? null,
        ];
    }

}