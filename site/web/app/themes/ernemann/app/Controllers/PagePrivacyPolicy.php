<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PagePrivacyPolicy extends Controller
{

    public function privacy() {
        return get_field( 'privacy_policy' );
    }

}