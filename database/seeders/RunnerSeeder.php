<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\Race;
use App\Models\Runner;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RunnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Runner');

        for ($i = 1; $i <= 10; $i++) {
            Runner::create([
                'name' => $faker->name,
            ]);
        }
    }
}
