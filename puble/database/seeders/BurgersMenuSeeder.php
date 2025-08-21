<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BurgersMenuSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "Бургери"
        $categoryId = DB::table('menu_categories')->where('key', 'burgers')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "burgers" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $burgersItems = [
            [
                'title_ua' => 'Бургер фірмовий з яловичиною',
                'title_en' => 'Branded beef burger',
                'variants' => [
                    ['output' => 300/100/50, 'volume' => 'гр', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Бургер з курячою котлетою',
                'title_en' => 'Chicken Burger',
                'variants' => [
                    ['output' => 300/100/50, 'volume' => 'гр', 'price' => 334.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Бургер з індичкою та соусом дор-блю',
                'title_en' => 'Turkey Burger with Dor-Blue sauce',
                'variants' => [
                    ['output' => 300/100/50, 'volume' => 'гр', 'price' => 369.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Бургер зі свининою',
                'title_en' => 'Pork Burger',
                'variants' => [
                    ['output' => 300/100/50, 'volume' => 'гр', 'price' => 339.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($burgersItems as $item) {
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
