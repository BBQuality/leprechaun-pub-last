<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeTeaSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'coffee_tea')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "coffee_tea" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Еспресо',
                'title_en' => 'Espresso',
                'variants' => [
                    ['output' => 30, 'volume' => 'мл', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Амерікано',
                'title_en' => 'Americano',
                'variants' => [
                    ['output' => 80, 'volume' => 'мл', 'price' => 55.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Капучіно',
                'title_en' => 'Cappuccino',
                'variants' => [
                    ['output' => 120, 'volume' => 'мл', 'price' => 75.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Латте',
                'title_en' => 'Latte',
                'variants' => [
                    ['output' => 200, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Ірландська кава',
                'title_en' => 'Irish coffee',
                'variants' => [
                    ['output' => 200, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Чай зелений класичний',
                'title_en' => 'Classic green tea',
                'variants' => [
                    ['output' => 500, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Чай трав’яний «Альпійський луг»',
                'title_en' => 'Herbal tea «Alpine meadow»',
                'variants' => [
                    ['output' => 500, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Чай фруктовий «Мультифрукт»',
                'title_en' => 'Fruit tea «Multifruit»',
                'variants' => [
                    ['output' => 500, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Чай чорний класичний',
                'title_en' => 'Classic black tea',
                'variants' => [
                    ['output' => 500, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Чай чорний з бергамотом',
                'title_en' => 'Black tea with bergamot',
                'variants' => [
                    ['output' => 500, 'volume' => 'мл', 'price' => 85.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Мед',
                'title_en' => 'Honey',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 55.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Молоко',
                'title_en' => 'Milk',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 20.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лимон',
                'title_en' => 'Lemon',
                'variants' => [
                    ['output' => 50, 'volume' => 'гр', 'price' => 30.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лайм',
                'title_en' => 'Lime',
                'variants' => [
                    ['output' => 50, 'volume' => 'гр', 'price' => 45.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'М’ята',
                'title_en' => 'Mint',
                'variants' => [
                    ['output' => 5, 'volume' => 'гр', 'price' => 40.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $categoryId,
                'title_ua' => $item['title_ua'],
                'title_en' => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
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
