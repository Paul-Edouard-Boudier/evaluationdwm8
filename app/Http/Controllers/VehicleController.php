<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function insert(Request $request) {
        // dd($request);
        $vehicle = new Vehicle;
        $vehicle->name = $request->name;
        $vehicle->height = $request->height;
        $vehicle->length = $request->length;
        $vehicle->boot_capacity = $request->boot_capacity;
        $vehicle->doors = $request->doors;
        $vehicle->type_id = $request->types;
        $vehicle->stock = $request->stock;
        $vehicle->save();
        $vehicle->colors()->attach($request->colors);
        $vehicle->brand()->attach($request->brands);
        //dd($vehicle);
        return Redirect('/');
    }

    public function updateAction(Request $request) {
        // dd($request);
        $vehicle = Vehicle::find($request->id);
        if (($vehicle->stock + $request->stock) <= 0 ) {
            $vehicle->colors()->detach();
            $vehicle->brand()->detach();
            $vehicle->delete();
            return Redirect('/');
        }
        $vehicle->name = $request->name;
        $vehicle->height = $request->height;
        $vehicle->length = $request->length;
        $vehicle->boot_capacity = $request->boot_capacity;
        $vehicle->doors = $request->doors;
        $vehicle->type_id = $request->types;
        $vehicle->stock = $vehicle->stock + $request->stock;
        $vehicle->colors()->detach();
        $vehicle->brand()->detach();
        $vehicle->colors()->attach($request->colors);
        $vehicle->brand()->attach($request->brands);
        $vehicle->save();
        return Redirect('/');
    }

    public function delete($id) {
        $vehicle = Vehicle::find($id);
        $vehicle->colors()->detach();
        $vehicle->brand()->detach();
        $vehicle->delete();
        return Redirect('/');
    }

}
