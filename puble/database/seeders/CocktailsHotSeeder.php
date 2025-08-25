<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsHotSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cocktails_hot')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cocktails_hot" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Глінтвейн',
                'title_en' => 'Mulled wine',
                'description_ua' => 'Червоне або біле вино, Мед, Фрукти, Спеції',
                'description_en' => 'Red or white wine, Honey, Fruits, Spices',
                'variants' => [
                    ['output' => 260, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Ірландський глінтвейн',
                'title_en' => 'Irish mulled wine',
                'description_ua' => 'Червоне або біле вино, Віскі, Мед, Фрукти, Спеції',
                'description_en' => 'Red or white wine, Whiskey, Honey, Fruits, Spices',
                'variants' => [
                    ['output' => 260, 'volume' => 'мл', 'price' => 219.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Глінтвейн чайний',
                'title_en' => 'Tea mulled wine',
                'description_ua' => 'Чай, Мед, Фрукти, Спеції',
                'description_en' => 'Tea, Honey, Fruits, Spices',
                'variants' => [
                    ['output' => 260, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $categoryId,
                'title_ua' => $item['title_ua'],
                'title_en' => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($item['variants'] as $variant) {
                DB::table('menu_item_variants')->insert([
                    'menu_item_id' => $menuItemId,
                    'output' => $variant['output'],
                    'volume' => $variant['volume'],
                    'price' => $variant['price'],
                    'currency' => $variant['currency'],
                    'spec_offer' => $variant['spec_offer'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
