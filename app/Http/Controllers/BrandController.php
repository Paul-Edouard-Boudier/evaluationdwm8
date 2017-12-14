<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public  function insert(Request $request) {
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->save();
        return Redirect('/');
    }
    public function updateAction(Request $request) {
        $brand = Brand::find($request->id);
        $brand->name = $request->name;
        $brand->save();
        return Redirect('/');
    }
}
