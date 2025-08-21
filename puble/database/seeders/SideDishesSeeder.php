<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SideDishesSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "Гарніри"
        $categoryId = DB::table('menu_categories')->where('key', 'side_dishes')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "side_dishes" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $sideDishesItems = [
            [
                'title_ua' => 'Картопля дольками',
                'title_en' => 'Potato slices',
                'variants' => [
                    ['output' => 150/50, 'volume' => 'гр', 'price' => 78.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Картопля фрі',
                'title_en' => 'Potato fries',
                'variants' => [
                    ['output' => 150/50, 'volume' => 'гр', 'price' => 99.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Картопляне пюре',
                'title_en' => 'Mashed potatoes',
                'variants' => [
                    ['output' => 150, 'volume' => 'гр', 'price' => 64.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Рис з овочами',
                'title_en' => 'Rice with Vegetables',
                'variants' => [
                    ['output' => 180, 'volume' => 'гр', 'price' => 119.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Овочі з хосперу',
                'title_en' => 'Grilled Vegetables',
                'variants' => [
                    ['output' => 200, 'volume' => 'гр', 'price' => 174.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($sideDishesItems as $item) {
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
