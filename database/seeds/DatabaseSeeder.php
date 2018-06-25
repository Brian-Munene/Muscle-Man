<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(users94233TableSeeder::class);
         $this->call(sessions94233Seeder::class);
         $this->call(gym_locations94233Seeder::class);
         $this->call(instructors94233Seeder::class);
    }
}
