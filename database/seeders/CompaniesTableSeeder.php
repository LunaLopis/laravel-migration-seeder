<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\en_US\Text;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $company = new Company();
            $company->nome = $faker->company();
            $company->indirizzo = $faker->address();
            $company->telefono = $faker->phoneNumber();
            $company->email = $faker->companyEmail();
            $descrizione = $faker->paragraphs(3, true);
            $company->save();
        };
    }
}
