<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DessertsSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "desserts"
        $categoryId = DB::table('menu_categories')->where('key', 'desserts')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "desserts" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $dessertsItems = [
            [
                'title_ua' => 'Морозиво',
                'title_en' => 'Ice Cream',
                'variants' => [
                    ['output' => 150, 'volume' => 'гр', 'price' => 119.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Шоколадний Фондан',
                'title_en' => 'Chocolate Fondant',
                'variants' => [
                    ['output' => 80, 'volume' => 'гр', 'price' => 144.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($dessertsItems as $item) {
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
