<?php

use Illuminate\Database\Seeder;

class FarmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Farm::class, 10)->create();
    }
}
