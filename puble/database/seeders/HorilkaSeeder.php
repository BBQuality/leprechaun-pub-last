<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HorilkaSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'horilka')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "horilka" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $horilkaItems = [
            [
                'title_ua' => 'Хріновуха',
                'title_en' => 'Hrinovuha',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Клюковка',
                'title_en' => 'Klukovka',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Ожина на джині',
                'title_en' => 'Blackberry with gin',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Малина на ромі',
                'title_en' => 'Raspberries with rum',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'М’ятна смородина',
                'title_en' => 'Mint Currant',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Nemiroff Original',
                'title_en' => 'Nemiroff Original',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 55.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Nemiroff «Українська медова з перцем»',
                'title_en' => 'Nemiroff «Ukrainian honey with pepper»',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 57.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Козацька рада «Класична»',
                'title_en' => 'Kozatska rada «Classic»',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 55.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Перша гільдія «Поважна»',
                'title_en' => 'First guild «Venerable»',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 70.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Українка',
                'title_en' => 'Ukrainka',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Грін Дей',
                'title_en' => 'Green Day',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 50.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Nemiroff De Luxe',
                'title_en' => 'Nemiroff De Luxe',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 70.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Nemiroff Lex',
                'title_en' => 'Nemiroff Lex',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Перша гільдія «Престиж»',
                'title_en' => 'First guild «Prestige»',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Finlandia',
                'title_en' => 'Finlandia Cranberry',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($horilkaItems as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $categoryId,
                'title_ua'    => $item['title_ua'],
                'title_en'    => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at'  => now(),
                'updated_at'  => now(),
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
