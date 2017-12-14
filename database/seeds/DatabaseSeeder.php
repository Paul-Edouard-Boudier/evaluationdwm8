<?php

use Illuminate\Database\Seeder;
include 'BrandsSeeder.php';
include 'VehiclesSeeder.php';
include 'TypesSeeder.php';
include 'ColorsSeeder.php';
include 'Brand_VehicleSeeder.php';
include 'Vehicle_ColorSeeder.php';

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(TypesSeeder::class);
        $this->call(ColorsSeeder::class);
        $this->call(Brand_VehicleSeeder::class);
        $this->call(Vehicle_ColorSeeder::class);
    }
}
