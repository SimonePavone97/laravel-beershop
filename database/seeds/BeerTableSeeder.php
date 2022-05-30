<?php

use Illuminate\Database\Seeder;

use App\Models\Beer;

use Faker\Generator as Faker;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 10; $i++){

            $beer = new Beer();
    
            $beer->nome = $faker->word();
            $beer->tipologia = $faker->word();
            $beer->tasso_alcolico = $faker->word();
            $beer->litri = $faker->randomDigit();

            $beer -> save();
            
        }

    }
}
