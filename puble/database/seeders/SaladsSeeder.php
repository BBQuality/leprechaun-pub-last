<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaladsSeeder extends Seeder
{
    public function run()
    {
        $categoryKey = 'salads';

        // Отримуємо category_id
        $category = DB::table('menu_categories')
            ->where('key', $categoryKey)
            ->first();

        if (!$category) {
            $this->command->error("Category '$categoryKey' not found!");
            return;
        }

        $salads = [
            [
                'title_ua' => 'Цезар',
                'title_en' => 'Caesar',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 250, 'volume' => 'гр', 'price' => 264.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 180, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Цезар з лососем',
                'title_en' => 'Caesar with Salmon',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 329.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Салат з тунцем',
                'title_en' => 'Tuna Salad',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 289.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Салат з курячою печінкою',
                'title_en' => 'Salad with chicken liver',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 210, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 210, 'volume' => 'гр', 'price' => 169.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Грецький',
                'title_en' => 'Greek',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 250, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Салат Баварський',
                'title_en' => 'Bavarian salad',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 224.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 250, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Салат з куркою та ананасами',
                'title_en' => 'Chicken and Pineapple Salad',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 234.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Салат Теплий',
                'title_en' => 'Warm Salad',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 250, 'volume' => 'гр', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Салат зі свіжою капустою та огірком',
                'title_en' => 'Salad with fresh cabbage and cucumber',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 200, 'volume' => 'гр', 'price' => 109.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
        ];

        // Вставляємо всі салати та їх варіанти
        foreach ($salads as $salad) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $category->id,
                'title_ua' => $salad['title_ua'],
                'title_en' => $salad['title_en'],
                'description_ua' => $salad['description_ua'],
                'description_en' => $salad['description_en'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($salad['variants'] as $variant) {
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

        $this->command->info('SaladsSeeder completed successfully!');
    }
}
