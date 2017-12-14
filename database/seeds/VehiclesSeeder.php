<?php

use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehicle::class, 30)->create();
        $this->command->info('Vehicles : Done');
    }
}
