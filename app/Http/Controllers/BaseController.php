<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Color;
use App\Type;
use App\Brand;

class BaseController extends Controller
{
    public function index() {
        $vehicles = Vehicle::all();
        return view('home', ['vehicles' => $vehicles]);
    }

    public function create() {
        $brandsAll = Brand::all();
        $brands = [];
        foreach($brandsAll as $value) {
            $brands[$value->id] = $value->name;
        }
        $colorsAll = Color::all();
        $colors = [];
        foreach($colorsAll as $value) {
            $colors[$value->id] = $value->name;
        }
        $typesAll = Type::all();
        $types = [];
        foreach($typesAll as $value) {
            $types[$value->id] = $value->name;
        }
        $function = 'insert';
        $name = null;
        $length = null;
        $height = null;
        $boot_capacity = null;
        $stock = null;
        return view('modify', [
            'function' => $function,
            'brands' => $brands,
            'colors' => $colors,
            'types' => $types,
            'name' => $name,
            'length' => $length,
            'height' => $height,
            'boot_capacity' => $boot_capacity,
            'stock' => $stock,
        ]);
    }
}
