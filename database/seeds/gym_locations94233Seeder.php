<?php

use Illuminate\Database\Seeder;

class gym_locations94233Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\gym_location94233::class, 10)->create();
    }
}
