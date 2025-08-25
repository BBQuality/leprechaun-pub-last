<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VermouthInfusionSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'vermouth_infusion')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "vermouth_infusion" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Jägermeister',
                'title_en' => 'Jägermeister',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Becherovka',
                'title_en' => 'Becherovka',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 135.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Absinthe',
                'title_en' => 'Absinthe',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Martini Bianco/ Rosso/ Extra Dry',
                'title_en' => 'Martini Bianco/ Rosso/ Extra Dry',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Martini Fiero',
                'title_en' => 'Martini Fiero',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Campari',
                'title_en' => 'Campari',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
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
