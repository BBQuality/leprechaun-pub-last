<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WineChileSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'wine_chile')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "wine_chile" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Вино Чилі',
                'title_en' => 'Wine Chile',
                'description_ua' => 'Будь-який келих вина. Подробиці запитуйте у офіціанта',
                'description_en' => 'A glass of any wine. Please, ask your waiter',
                'variants' => [
                    ['output' => 100, 'volume' => 'мл', 'price' => 125.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 799.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
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
