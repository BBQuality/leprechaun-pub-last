<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandyCognacSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'brandy_cognac')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "brandy_cognac" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $brandyItems = [
            [
                'title_ua' => 'Закарпатський 4*',
                'title_en' => 'Zakarpatsky 4*',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 99.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Довбуш Карпатський 4*',
                'title_en' => 'Dovbush Karpatsky 4*',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Старий Кахеті 3*',
                'title_en' => 'Old Kakheti 3*',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Старий Кахеті 5*',
                'title_en' => 'Old Kakheti 5*',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 110.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Hennessy VS',
                'title_en' => 'Hennessy VS',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 335.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($brandyItems as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $categoryId,
                'title_ua'    => $item['title_ua'],
                'title_en'    => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at'  => now(),
                'updated_at'  => now(),
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
