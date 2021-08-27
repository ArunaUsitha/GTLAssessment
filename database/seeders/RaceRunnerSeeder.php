<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\RaceRunner;
use App\Models\Runner;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RaceRunnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $races = Race::all();
        $runners = Runner::all();

        foreach ($races as $race) {

            foreach ($runners as $runner) {

                RaceRunner::create([
                    'race_id' => $race->id,
                    'runner_id' => $runner->id
                ]);

            }

        }
    }
}
