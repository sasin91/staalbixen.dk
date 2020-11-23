<?php

namespace Database\Seeders;

use App\Models\DeliveryProvider;
use Illuminate\Database\Seeder;

class DeliveryProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryProvider::query()->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Afhent i butik',
                    'price' => 0,
                    'description' => 'Afhent dine produkter ved StålBixen, Sorøvej 57 4291 Ruds Vedby.'
                ],
                [
                    'id' => 2,
                    'name' => 'GLS - Hjemmelevering',
                    'price' => 45,
                    'description' => 'Leveres direkte hjem til dig (Kræver elektronisk fuldmagt, hvis du ikke er hjemme).'
                ]
            ]
        );
    }
}
