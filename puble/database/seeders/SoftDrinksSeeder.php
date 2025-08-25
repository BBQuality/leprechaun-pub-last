<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftDrinksSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'soft_drinks')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "soft_drinks" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Сік свіжовичавлений з пакету',
                'title_en' => 'Juice in assortment',
                'variants' => [
                    ['output' => 0.2, 'volume' => 'л', 'price' => 60.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Узвар',
                'title_en' => 'Uzvar',
                'variants' => [
                    ['output' => 0.2, 'volume' => 'л', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Coca-Cola/Fanta/Sprite',
                'title_en' => 'Coca-Cola/Fanta/Sprite',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 65.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Швепс',
                'title_en' => 'Schweppes',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 80.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Burn',
                'title_en' => 'Burn',
                'variants' => [
                    ['output' => 0.25, 'volume' => 'л', 'price' => 125.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Моршинська Преміум',
                'title_en' => 'Morshinska Premium',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Боржомі',
                'title_en' => 'Borjomi',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лимонад',
                'title_en' => 'Lemonade',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 55.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 65.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            foreach ($item['variants'] as $variant) {
                DB::table('menu_item_variants')->insert([
                    'menu_item_id' => $menuItemId,
                    'output'       => $variant['output'],
                    'volume'       => $variant['volume'],
                    'price'        => $variant['price'],
                    'currency'     => $variant['currency'],
                    'spec_offer'   => $variant['spec_offer'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
        }
    }
}
