<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveProperties extends Controller
{

    public function propertyDetails()
    {
        $field = get_field('property_details');
        return (object) [
            'city'        => $field['city'] ?? null,
            'bedrooms'     => $field['bedrooms'] ?? null,
        ];
    }

    public function propertyPrice()
    {
        return (object)array(
            'price' => get_field('property_price'),
        );
    }


}