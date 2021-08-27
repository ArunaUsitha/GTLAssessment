<?php

namespace Database\Seeders;

use App\Models\FormData;
use App\Models\Meeting;
use App\Models\Race;
use App\Models\RaceRunner;
use App\Models\Runner;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FormDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\FormData');

        $raceRunners = RaceRunner::all();

        foreach ($raceRunners as $raceRunner) {

            FormData::create([
                'race_runner_id' => $raceRunner->id,
                'raced_on' => $faker->dateTimeBetween('-10 days', 'now'),
                'distance' => $faker->numberBetween(0, 20),
                'place' => $faker->city(),
                'prize_won' => $faker->numberBetween(0, 50000),
            ]);

        }
    }
}
