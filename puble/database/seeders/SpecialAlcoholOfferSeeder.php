<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialAlcoholOfferSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'special_alcohol_offer')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "special_alcohol_offer" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $specialAlcoholItems = [
            [
                'title_ua' => 'Хріновуха',
                'title_en' => 'Hrinovuha',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 419.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Клюковка',
                'title_en' => 'Klukovka',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 419.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Nemiroff Original',
                'title_en' => 'Nemiroff Original',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 499.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Козацька рада «Класична»',
                'title_en' => 'Kozatska rada «Classic»',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 499.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Українка',
                'title_en' => 'Ukrainka',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 439.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Грін Дей',
                'title_en' => 'Green Day',
                'variants' => [
                    ['output' => 1, 'volume' => 'Пляшка', 'price' => 439.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
        ];

        foreach ($specialAlcoholItems as $item) {
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
