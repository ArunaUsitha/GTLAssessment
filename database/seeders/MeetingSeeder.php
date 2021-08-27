<?php

namespace Database\Seeders;

use App\Models\Meeting;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('App\Meeting');

        for ($i = 1; $i <= 10; $i++)
        {
            Meeting::create([
                'name' => $faker->domainWord,
                'location' => $faker->city(),
            ]);
        }

    }
}
