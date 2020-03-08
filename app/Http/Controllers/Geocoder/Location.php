<?php

namespace App\Http\Controllers\Geocoder;

use What3words\Geocoder\Geocoder;

class Location
{
    private $geocoder;

    public function __construct()
    {
        $this->geocoder = new Geocoder(env('WHAT3WORDSAPI'));
    }

    public function getCoordinates($request)
    {
        $words = $request['primary_address'] . '.' . $request['city'] . '.' . $request['country'];
        return  $this->geocoder->convertToCoordinates($words);
    }
}
