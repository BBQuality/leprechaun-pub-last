<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastasSeeder extends Seeder
{
    public function run(): void
    {
        // Беремо існуючу категорію "Пасти"
        $categoryId = DB::table('menu_categories')->where('key', 'pasta')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "pasta" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        // Меню паст
        $pastas = [
            [
                'title_ua' => 'Карбонара',
                'title_en' => 'Carbonara',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 250, 'volume' => 'гр', 'price' => 179.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Паста з морепродуктами',
                'title_en' => 'Seafood Pasta',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 269.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Фетучіні',
                'title_en' => 'Fettuccine',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 300, 'volume' => 'гр', 'price' => 234.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Паста з куркою та соусом теріякі',
                'title_en' => 'Pasta with chicken and teriyaki sauce',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 250, 'volume' => 'гр', 'price' => 139.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
        ];

        foreach ($pastas as $pasta) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $pasta['title_ua'],
                'title_en'       => $pasta['title_en'],
                'description_ua' => $pasta['description_ua'],
                'description_en' => $pasta['description_en'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($pasta['variants'] as $variant) {
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
