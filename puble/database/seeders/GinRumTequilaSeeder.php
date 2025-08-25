<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GinRumTequilaSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'gin_rum_tequila')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "gin_rum_tequila" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Gin',
                'title_en' => 'Gin',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Captain Morgan Black',
                'title_en' => 'Captain Morgan Black',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 125.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Captain Morgan Gold',
                'title_en' => 'Captain Morgan Gold',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Bacardi Carta Negra',
                'title_en' => 'Bacardi Carta Negra',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 125.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Bacardi Carta Blanca',
                'title_en' => 'Bacardi Carta Blanca',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Bacardi Oakheart',
                'title_en' => 'Bacardi Oakheart',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Olmeca Blanco',
                'title_en' => 'Olmeca Blanco',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Olmeca Gold',
                'title_en' => 'Olmeca Gold',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Sauza Blanco',
                'title_en' => 'Sauza Blanco',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Sauza Gold',
                'title_en' => 'Sauza Gold',
                'variants' => [
                    ['output' => 50, 'volume' => 'мл', 'price' => 130.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
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
