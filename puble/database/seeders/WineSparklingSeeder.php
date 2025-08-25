<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WineSparklingSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'wine_sparkling')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "wine_sparkling" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Артемівське',
                'title_en' => 'Artemivske Champagne',
                'description_ua' => 'В асортименті',
                'description_en' => 'In assortment',
                'variants' => [
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 649.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Ламбруско',
                'title_en' => 'Lambrusco',
                'description_ua' => 'В асортименті',
                'description_en' => 'In assortment',
                'variants' => [
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 799.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Villa Брют',
                'title_en' => 'Villa Brut',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 599.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            foreach ($item['variants'] as $variant) {
                DB::table('menu_item_variants')->insert([
                    'menu_item_id' => $menuItemId,
                    'output'       => $variant['output'],
                    'volume'       => $variant['volume'],
                    'price'        => $variant['price'],
                    'currency'     => $variant['currency'],
                    'spec_offer'   => $variant['spec_offer'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
        }
    }
}
