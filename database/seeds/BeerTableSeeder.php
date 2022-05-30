<?php

use Illuminate\Database\Seeder;

use App\Models\Beer;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $beer = new Beer();

        $beer -> nome = 'Peroni';
        $beer -> tipologia = 'Bionda';
        $beer -> tasso_alcolico = 'basso';
        $beer -> litri = '1';
        $beer -> save();
    }
}
