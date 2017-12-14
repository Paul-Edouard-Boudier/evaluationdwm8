<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Adding manual entries for colors');
        DB::table('colors')->insert([
            'name' => 'Black',
        ]);
        DB::table('colors')->insert([
            'name' => 'White',
        ]);
        DB::table('colors')->insert([
            'name' => 'Brown',
        ]);
        DB::table('colors')->insert([
            'name' => 'Red',
        ]);
        DB::table('colors')->insert([
            'name' => 'Yellow',
        ]);
        DB::table('colors')->insert([
            'name' => 'Grey',
        ]);
        DB::table('colors')->insert([
            'name' => 'Blue',
        ]);
        $this->command->info('Colors : Done');
    }
}
