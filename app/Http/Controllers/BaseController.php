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
        $vehicles = Vehicle::orderBy('id', 'desc')->take(5)->get();
        //$lastFiveVehicles = array_slice($vehicles, -5);
        // return view('home', ['vehicles' => $vehicles]);
        $brands = Brand::orderBy('id', 'desc')->take(5)->get();
        $stockTotal = 0;
//        return view('brands', ['brands' => $brands, 'stockTotal' => $stockTotal]);
        return view('dashboard', ['brands' => $brands, 'vehicles' => $vehicles, 'stockTotal' => $stockTotal]);
    }
    public function createBrand() {
        $function = 'insert';
        return view('modifybrand', ['function' => $function]);
    }
    public function updateBrand($id) {
        $brand = Brand::find($id);
        $name = $brand->name;
        $function = 'update';
        return view('modifybrand', ['function' => $function]);
    }

    public function createVehicle() {
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

    public function updateVehicle($id) {
        $vehicle = Vehicle::find($id);
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
        $function = 'update';
        $name = $vehicle->name;
        $length = $vehicle->length;
        $height = $vehicle->height;
        $boot_capacity = $vehicle->boot_capacity;
        $stock = $vehicle->stock;
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
            'id' => $id,
        ]);
    }
}
