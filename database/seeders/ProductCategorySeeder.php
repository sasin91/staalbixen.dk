<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::query()->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Borde Og Stativer'
                ],
                [
                    'id' => 2,
                    'name' => 'Diverse Stålvare'
                ],
                [
                    'id' => 3,
                    'name' => 'Pladebearbejdning'
                ],
                [
                    'id' => 4,
                    'name' => 'Platforme, stativer osv med hæve sænke funktion'
                ],
                [
                    'id' => 5,
                    'name' => 'Rustfri Arbejde'
                ],
                [
                    'id' => 6,
                    'name' => 'Vogne'
                ]
            ]
        );
    }
}
