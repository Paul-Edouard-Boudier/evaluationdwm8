<?php

use Illuminate\Database\Seeder;

class Vehicle_ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vehicle_Color::class, 45)->create();
        $this->command->info('Vehicles has colors : Done');
    }
}
