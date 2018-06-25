<?php

use Illuminate\Database\Seeder;

class users94233TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\user94233::class, 10)->create();
    }
}
