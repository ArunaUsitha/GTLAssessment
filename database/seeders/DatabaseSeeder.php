<?php

namespace Database\Seeders;

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
        $this->call(MeetingSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(RunnerSeeder::class);
        $this->call(RaceRunnerSeeder::class);
        $this->call(FormDataSeeder::class);
    }
}
