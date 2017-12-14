<?php

use Illuminate\Database\Seeder;

class Brand_VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brand_Vehicle::class, 30)->create();
        $this->command->info('Brands has Vehicles : Done');
    }
}
