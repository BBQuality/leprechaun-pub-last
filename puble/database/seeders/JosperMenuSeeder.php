<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JosperMenuSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "Хоспер меню"
        $categoryId = DB::table('menu_categories')->where('key', 'josper_menu')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "josper_menu" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $josperItems = [
            [
                'title_ua' => 'Шмат свинини ошийок',
                'title_en' => 'Pork neck steak',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Рібай стейк',
                'title_en' => 'Ribeye steak',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 329.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Шмат курячого філе',
                'title_en' => 'Chicken Fillet Steak',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 169.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Шмат філе індички',
                'title_en' => 'Turkey steak',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 229.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($josperItems as $item) {
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
