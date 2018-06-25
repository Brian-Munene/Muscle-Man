<?php

use Illuminate\Database\Seeder;

class instructors94233Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\instructor94233::class, 10)->create();
    }
}
