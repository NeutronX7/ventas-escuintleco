<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = [
            ['name' => 'Ciudad de Guatemala', 'address' => 'Zona 1, Ciudad de Guatemala', 'latitude' => 14.634915, 'longitude' => -90.506882],
            ['name' => 'Antigua Guatemala', 'address' => 'Calle del Arco, Antigua Guatemala', 'latitude' => 14.556478, 'longitude' => -90.733832],
            ['name' => 'Quetzaltenango', 'address' => 'Zona 3, Quetzaltenango', 'latitude' => 14.834086, 'longitude' => -91.518487]
        ];

        return view('location.index', compact('locations'));
    }
}
