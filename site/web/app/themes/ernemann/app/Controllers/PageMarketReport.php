<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageMarketReport extends Controller
{
    public function whyreport()
    {
        $field = get_field('why_report');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'        => $field['content'] ?? null,
            'button_text'     => $field['button_text'] ?? null,
            'button_link'     => $field['button_link'] ?? null,
            'subcontent'     => $field['sub-content'] ?? null,
        ];
    }
    public function whataride()
    {
        $field = get_field('what_a_ride');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'date'     => $field['date'] ?? null,
            'content'        => $field['content'] ?? null,
            'thumbnail'     => $field['report_thumbnail'] ?? null,
            'button_text'     => $field['button_text'] ?? null,
            'pdf'     => $field['pdf_file'] ?? null,
        ];
    }
}
