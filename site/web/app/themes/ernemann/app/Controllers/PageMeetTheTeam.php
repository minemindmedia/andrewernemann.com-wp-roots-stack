<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageMeetTheTeam extends Controller
{

    public function whoWeAre()
    {
        $field = get_field('who_we_are');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'subheading'     => $field['subheading'] ?? null,
            'content'     => $field['content'] ?? null,
        ];
    }

    public function meetAndrew()
    {
        $field = get_field('the_founder');
        return (object) [
            'title'     => $field['title'] ?? null,
            'statement'     => $field['statement'] ?? null,
            'biography'     => $field['biography'] ?? null,
            'photo'     => $field['photo'] ?? null,
        ];
    }

    public function meetPeople()
    {
        $field = get_field('meet_people');
        return (object) [
            'title'     => $field['title'] ?? null, 
            'statement'     => $field['statement'] ?? null,
            'biography'     => $field['biography'] ?? null,
            'photo'     => $field['photo'] ?? null,
        ];
    }

    public function betterTogether()
    {
        $field = get_field('better_together');
        return (object) [
            'title'     => $field['title'] ?? null, 
            'content'     => $field['content'] ?? null,
            'background'     => $field['background'] ?? null,
        ];
    }

}