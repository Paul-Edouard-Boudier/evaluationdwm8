<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class BaseController extends Controller
{
    public function index() {
        $vehicles = Vehicle::all();
        return view('home', ['vehicles' => $vehicles]);
    }
}
