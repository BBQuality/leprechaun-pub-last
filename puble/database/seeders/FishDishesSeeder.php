<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishDishesSeeder extends Seeder
{
    public function run(): void
    {
        // Беремо існуючу категорію "Рибні страви"
        $categoryId = DB::table('menu_categories')->where('key', 'fish_dishes')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "fish_dishes" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        $fishDishes = [
            [
                'title_ua' => 'Скумбрія з соусом чілі',
                'title_en' => 'Mackerel with chili sauce',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 299.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лосось у медовому соусі',
                'title_en' => 'Salmon with honey sauce',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сібас з овочами гриль',
                'title_en' => 'Seabass with grilled vegetables',
                'variants' => [
                    ['output' => 150, 'volume' => 'гр', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 100, 'volume' => 'гр', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($fishDishes as $dish) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $dish['title_ua'],
                'title_en'       => $dish['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($dish['variants'] as $variant) {
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
