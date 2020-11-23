<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert(
            [
                // Borde og Stativer
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Arbejdsbord “HEAVY DUTY”',
                    'slug' => 'arbejdsbord-heavy-duty',
                    'description' => 'Solidt arbejdsbord til støbeforme. Kraftig ramme og med 3mm bordplade. Pulverlakeret.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2017/09/IMG_20170307_161259-300x169.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Bordplade',
                    'slug' => 'bordplade',
                    'description' => 'Rustfri bordplade, 2-delt og med op- nedbukkede kanter hele vejen rundt.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2015/02/WP_20141106_16_14_55_Pro-300x169.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Hæve sænke bord',
                    'slug' => 'Haeve-saenke-bord',
                    'description' => 'Hæve sænkebord til sortering af plasticemner. Bordplade i stærk pulverlakeret stål med sliske, rustfri slebet bordstel. Det er installeret hydraulisk hæve sænke system indvendigt i bordstellet for ergonomisk arbejdshøjde.

                    Skal StålBixen lave et ligende bord til dig? Send en forespørgsel.

                    Bygges i alle udformninger, højder, dimensioner og materialer.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2020/02/IMG_20190405_183446-576x1024.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Kvalitets og målebord',
                    'slug' => 'Kvalitets-og-maalebord',
                    'description' => 'Specielt fremstillet kvalitets og målebord. Bord er fremstillet special efter kundens ønske om at have muligfor mobilt arbejdsbord med lysplade for kvalitets og måle kontrol. Bordet har batteriskab og led oplyst bordplade samt holder til skraldepose.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2015/02/IMG_20141209_204711-300x222.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Rullebord til digital vægt',
                    'slug' => 'Rullebord-til-digital-vaegt',
                    'description' => 'Rullebord til digital vægt. Fremstillet i rustfrit stål med kasse for touch skræm samt “lygtepæl” til signal lampe.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2017/09/WP_20160612_13_55_38_Pro-e1506157804662-169x300.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Rustfrit sorteringsbord med lysplade',
                    'slug' => 'Rustfrit-sorteringsbord-med-lysplade',
                    'description' => 'Special fremstillet bord til kvalitets kontrol og sortering af emner, selve bordpladen er i matteret plexiglas og lyser op så fejl og farveafvigelser i emner er mere synlige. Bordet er bygget over på alm. hjørne hæve/sænke bord.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2015/02/WP_20141023_16_27_53_Pro-300x169.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Rustfrit sorteringsbord med lysplade',
                    'slug' => 'Rustfrit-sorteringsbord-med-lysplade',
                    'description' => 'Special fremstillet bord til kvalitets kontrol og sortering af emner, selve bordpladen er i matteret plexiglas og lyser op så fejl og farveafvigelser i emner er mere synlige. Bordet er bygget over på alm. hjørne hæve/sænke bord.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2015/02/WP_20141023_16_27_53_Pro-300x169.jpg',
                ],
                [
                    'product_category_id' => 1,
                    'stock' => 100,
                    'name' => 'Rustfri vask med drypbakke',
                    'slug' => 'Rustfri-vask-med-drypbakke',
                    'description' => 'Specialtfremstillet rustfri vask med drypbakke til laboratorie hvor kunde havde brug for ekstra dyb vask.',
                    'photo_url' => 'http://staalbixen.dk/wp-content/uploads/2017/09/IMG_20161009_121019-300x169.jpg',
                ],
            ]
        );

        foreach (Product::doesntHave('latestPrice')->get() as $product) {
            ProductPrice::factory(
                [
                    'product_id' => $product->id
                ]
            )->create();
        }
    }
}
