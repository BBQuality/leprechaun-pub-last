<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerCiderSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'beer_draught')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "beer_draught" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Фірмове світле',
                'title_en' => 'Branded light',
                'variants' => [
                    ['output' => 0.4, 'volume' => 'л', 'price' => 82.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Фірмове нефільтроване',
                'title_en' => 'Branded unfiltered',
                'variants' => [
                    ['output' => 0.4, 'volume' => 'л', 'price' => 82.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Фірмове темне',
                'title_en' => 'Branded dark',
                'variants' => [
                    ['output' => 0.4, 'volume' => 'л', 'price' => 82.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Milk Stout “KLEПKA”',
                'title_en' => 'Milk Stout “KLEПKA”',
                'variants' => [
                    ['output' => 0.4, 'volume' => 'л', 'price' => 124.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'IPA “KLEПKA”',
                'title_en' => 'IPA “KLEПKA”',
                'variants' => [
                    ['output' => 0.4, 'volume' => 'л', 'price' => 109.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Грімберген Блонд',
                'title_en' => 'Grimbergen Blonde',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 134.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 170.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Грімберген Бланш',
                'title_en' => 'Grimbergen Blanche',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 134.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 170.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Грімберген Дабл-амбрі',
                'title_en' => 'Grimbergen Double-ambrée',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 134.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 170.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сидр “Сомерсбі” яблучний / чорничний',
                'title_en' => 'Cider “Somersby” apple / bilberry',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 95.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 109.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Кроненбург 1664 Блан',
                'title_en' => 'Kronenbourg 1664 Blanc',
                'variants' => [
                    ['output' => 0.3, 'volume' => 'л', 'price' => 88.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 114.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Гіннесс',
                'title_en' => 'Guinness',
                'variants' => [
                    ['output' => 0.25, 'volume' => 'л', 'price' => 154.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 0.5, 'volume' => 'л', 'price' => 248.00, 'currency' => 'UAH', 'spec_offer' => false],
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
