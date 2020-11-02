<?php

use Illuminate\Database\Seeder;
use App\Models\ModelMarket;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelMarket $market)
    {
        $market->create([
            'name' => 'Arroz',
            'location' => 'A2D'
        ]);

        $market->create([
            'name' => 'Café',
            'location' => 'A3L'
        ]);

        $market->create([
            'name' => 'Feijão',
            'location' => 'B1D'
        ]);

        $market->create([
            'name' => 'Leite',
            'location' => 'C3L'
        ]);

        $market->create([
            'name' => 'Açucar',
            'location' => 'A1L'
        ]);

        $market->create([
            'name' => 'Macarrão',
            'location' => 'A3D'
        ]);

        $market->create([
            'name' => 'Azeite',
            'location' => 'B4D'
        ]);

        $market->create([
            'name' => 'Sal',
            'location' => 'B4L'
        ]);

        $market->create([
            'name' => 'Trigo com fermento',
            'location' => 'B2D'
        ]);

        $market->create([
            'name' => 'Trigo sem fermento',
            'location' => 'B3D'
        ]);

        $market->create([
            'name' => 'Flocão',
            'location' => 'C1L'
        ]);

        $market->create([
            'name' => 'Milho',
            'location' => 'B4L'
        ]);

        $market->create([
            'name' => 'Ervilha',
            'location' => 'B5L'
        ]);

        $market->create([
            'name' => 'Palmito',
            'location' => 'C2D'
        ]);

        $market->create([
            'name' => 'Alho',
            'location' => 'A5D'
        ]);

        $market->create([
            'name' => 'Extrato tomate',
            'location' => 'C3D'
        ]);
    }
}
