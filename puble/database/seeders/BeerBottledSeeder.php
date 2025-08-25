<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerBottledSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'beer_bottled')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "beer_bottled" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $beerBottledItems = [
            [
                'title_ua' => 'Варштайнер Екстра',
                'title_en' => 'Warsteiner Extra',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 178.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Карлсберг б/а',
                'title_en' => 'Carlsberg n/a',
                'variants' => [
                    ['output' => 0.45, 'volume' => 'л', 'price' => 128.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Варштайнер Преміум Фреш б/а',
                'title_en' => 'Warsteiner Premium Fresh n/a',
                'variants' => [
                    ['output' => 0.33, 'volume' => 'л', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Гіннес б/а',
                'title_en' => 'Guinness n/a',
                'variants' => [
                    ['output' => 0.44, 'volume' => 'л', 'price' => 288.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($beerBottledItems as $item) {
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
