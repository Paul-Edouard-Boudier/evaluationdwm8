<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function type() {
        return $this->belongsTo('App\Type');
    }
    public function colors() {
        return $this->belongsToMany('App\Color', 'vehicle_color');
    }
    public function brand() {
        return $this->belongsToMany('App\Brand');
    }
}
