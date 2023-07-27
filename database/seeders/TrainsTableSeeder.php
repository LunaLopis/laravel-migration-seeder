<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
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
        for($i=0; $i<10; $i++){
            $train = new Train();
            $train->codice_treno = $faker->bothify('??????#');
            $train->azienda = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->numero_carrozze = $faker->numberBetween(0, 3000);
            $train->data_partenza = $faker->date();
            $train->data_arrivo = $faker->date();  
            
            $train->save();
        };
    }
}

