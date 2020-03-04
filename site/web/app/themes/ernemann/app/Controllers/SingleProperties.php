<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProperties extends Controller
{

    public function gallery() {
        return get_field( 'header_images' );
    }

    public function galleryPoster() {
        return get_field( 'header_images_poster' );
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

    public function youtube()
    {
        $field = get_field('youtube');
        return (object) [
            'id'     => $field['id'] ?? null,
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

    public function schedule()
    {
        $field = get_field('schedule_showing');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'content'     => $field['content'] ?? null,

        ];
    }

    public function location()
    {
        $field = get_field('location');
        return (object) [
            'heading'     => $field['heading'] ?? null,
            'directions'     => $field['directions'] ?? null,
            'link'     => $field['directions_link'] ?? null,
            'map'     => $field['google_map'] ?? null,
            'bkg'     => $field['background'] ?? null,
        ];
    }

    public function tour()
    {
        $field = get_field('3d_tour');
        return (object) [
            'embed'     => $field['3d_tour_embed_code'] ?? null,
        ];
    }


}