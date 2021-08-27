<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\Race;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Race');

        $meetings = Meeting::all();

        foreach ($meetings as $meeting)
        {
            Race::create([
                'meeting_id' => $meeting->id,
                'name' => $faker->domainWord,
            ]);
        }

    }

}
