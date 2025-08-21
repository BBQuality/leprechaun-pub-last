<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PansMenuSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "Пательні"
        $categoryId = DB::table('menu_categories')->where('key', 'pans')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "pans" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $pansItems = [
            [
                'title_ua' => 'Пательня по-українськи',
                'title_en' => 'Ukranian Frying Pan',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 324.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 279.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Пательня по-французьки',
                'title_en' => 'French Frying Pan',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 344.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 289.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Пательня, що шкварчить',
                'title_en' => 'Hot frying pan',
                'variants' => [
                    ['output' => 550, 'volume' => 'гр', 'price' => 529.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($pansItems as $item) {
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
