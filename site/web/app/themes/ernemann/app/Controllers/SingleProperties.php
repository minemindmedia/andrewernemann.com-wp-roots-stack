<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProperties extends Controller
{

    public function gallery() {
        return get_field( 'header_images' );
    }

    public function propertyDetails()
    {
        $field = get_field('property_details');
        return (object) [
            'address'     => $field['address'] ?? null,
            'city'        => $field['city'] ?? null,
            'neighborhood'     => $field['neighborhood'] ?? null,
            'state'     => $field['state'] ?? null,
            'zip'     => $field['zip_code'] ?? null,
            'bedrooms'     => $field['bedrooms'] ?? null,
            'bathrooms'     => $field['bathrooms'] ?? null,
            'sqft'     => $field['square_feet'] ?? null,
            'acres'     => $field['acres'] ?? null,
            'lot'     => $field['lot_size'] ?? null,
            'description'     => $field['description'] ?? null,
        ];
    }

    public function propertyPrice()
    {
        return (object)array(
            'price' => get_field('property_price'),
        );
    }

    public function videoSlideshow()
    {
        $field = get_field('video__slideshow');
        return (object) [
            'video_slideshow'     => $field['video_or_slideshow'] ?? null,
            'poster'     => $field['video_poster'] ?? null,
            'mp4'     => $field['mp4_video'] ?? null,
            'webm'     => $field['webm_video'] ?? null,
            'slideshow'     => $field['slideshow'] ?? null,
        ];
    }

    public function documentsHeading()
    {
        return (object)array(
            'heading' => get_field('documents_heading'),
        );
    }

    public function documentsBackground()
    {
        return (object)array(
            'bkg' => get_field('documents_background'),
        );
    }

    public function buyNow()
    {
        $field = get_field('buy_it_now');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'     => $field['content'] ?? null,
            'background'     => $field['background'] ?? null,

        ];
    }


}