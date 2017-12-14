<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Adding manual entries for types');
        DB::table('types')->insert([
            'name' => 'City',
        ]);
        DB::table('types')->insert([
            'name' => 'Family',
        ]);
        DB::table('types')->insert([
            'name' => 'Luxury',
        ]);
        DB::table('types')->insert([
            'name' => 'Sport',
        ]);
        DB::table('types')->insert([
            'name' => 'SUV',
        ]);
        DB::table('types')->insert([
            'name' => 'Pickup',
        ]);
        DB::table('types')->insert([
            'name' => 'Crossover',
        ]);
        $this->command->info('Types : Done');
    }
}
