<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->agency = $faker->words(1, true);
            $newTrain->departure_station = $faker->words(2, true);
            $newTrain->arrival_station = $faker->words(2, true);
            $newTrain->departure_time = $faker->year();
            $newTrain->arrival_time = $faker->year('+3 years');
            $newTrain->train_code = $faker->randomNumber(1, true);
            $newTrain->number_of_carriages = $faker->randomNumber(1, true);
            $newTrain->in_time = $faker->word('si', 'no');
            $newTrain->deleted = $faker->word('si', 'no');
            $newTrain->save();

        }
    }
}

// Ogni treno dovrà avere:
// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato
