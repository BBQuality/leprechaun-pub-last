<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WineGeorgiaSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'wine_georgia')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "wine_georgia" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Алазанська долина',
                'title_en' => 'Alazanskaya Dolina',
                'description_ua' => 'Біле (напівсолодке) / Червоне (напівсолодке)',
                'description_en' => 'White (semi-sweet) / Red (semi-sweet)',
                'variants' => [
                    ['output' => 100, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 799.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сапераві',
                'title_en' => 'Saperavi',
                'description_ua' => 'Червоне (сухе)',
                'description_en' => 'Red (dry)',
                'variants' => [
                    ['output' => 100, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 1, 'volume' => 'пляшка', 'price' => 799.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Цинандалі',
                'title_en' => 'Tsinandali',
                'description_ua' => 'Біле (сухе)',
                'description_en' => 'White (dry)',
                'variants' => [
                    ['output' => 100, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
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
