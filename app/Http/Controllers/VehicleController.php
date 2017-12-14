<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function insert(Request $request) {
        $vehicle = new Vehicle;
        $vehicle->name = $request->name;
    }
}
