<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->company = $faker->company();
            $newTrain->station_departure = $faker->city();
            $newTrain->station_arrival = $faker->city();
            $newTrain->date_departure = $faker->dateTimeBetween(date('Y-m-d'), '+1 week');
            $newTrain->time_departure = $faker->time();
            $newTrain->date_arrival = $faker->dateTimeBetween(date('Y-m-d'), '+1 week');
            $newTrain->time_arrival = $faker->time();
            $newTrain->wagon = rand(1, 20);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
