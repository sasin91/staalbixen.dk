<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            [
                'email' => 'staalbixen@gmail.com',
                'name' => 'Rune Chr. Hansen',
            ]
        );

        $this->call(ExchangeRateSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(DeliveryProviderSeeder::class);
    }
}
