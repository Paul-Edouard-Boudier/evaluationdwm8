<?php

use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Brand::class, 8)->create();
        $this->command->info('Brands : Done');
    }
}
