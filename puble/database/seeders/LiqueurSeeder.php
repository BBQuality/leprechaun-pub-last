<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiqueurSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'liqueur')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "liqueur" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Baileys',
                'title_en' => 'Baileys',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Sambuca',
                'title_en' => 'Sambuca',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Kahlúa',
                'title_en' => 'Kahlúa',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Malibu',
                'title_en' => 'Malibu',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Aperol',
                'title_en' => 'Aperol',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 125.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
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
