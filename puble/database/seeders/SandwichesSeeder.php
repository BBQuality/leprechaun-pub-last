<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SandwichesSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'sandwiches')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "sandwiches" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $sandwichesItems = [
            [
                'title_ua' => 'Біг Босс сендвіч зі свининою BBQ',
                'title_en' => 'Big Boss Pork Sandwich BBQ',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сендвіч Кентуккі',
                'title_en' => 'Kentucky Sandwich',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 214.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Не клубний сендвіч з шинкою і томатами',
                'title_en' => 'Not a club Sandwich with Ham and Tomatoes',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 189.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сендвіч Для своїх з курячим стегном з хосперу',
                'title_en' => 'For friendly Sandwich with josper chicken thigh',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 244.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($sandwichesItems as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($item['variants'] as $variant) {
                DB::table('menu_item_variants')->insert([
                    'menu_item_id' => $menuItemId,
                    'output'       => $variant['output'],
                    'volume'       => $variant['volume'],
                    'price'        => $variant['price'],
                    'currency'     => $variant['currency'],
                    'spec_offer'   => $variant['spec_offer'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
