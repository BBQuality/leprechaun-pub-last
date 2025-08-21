<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstCoursesSeeder extends Seeder
{
    public function run(): void
    {
        // Беремо існуючу категорію "Перші страви"
        $categoryId = DB::table('menu_categories')->where('key', 'first_courses')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "first_courses" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        $firstCourses = [
            [
                'title_ua' => 'Борщ український',
                'title_en' => 'Ukrainian borsch',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 139.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 99.00,  'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Курячий бульйон',
                'title_en' => 'Chicken soup',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 144.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 109.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Солянка',
                'title_en' => 'Solianka soup',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Грибний суп-пюре',
                'title_en' => 'Mushroom soup',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 149.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
            [
                'title_ua' => 'Суп сирно-цибулевий',
                'title_en' => 'Cheese and onion soup',
                'description_ua' => '',
                'description_en' => '',
                'variants' => [
                    ['output' => 450, 'volume' => 'гр', 'price' => 164.00, 'currency' => 'UAH', 'spec_offer' => false],
                    ['output' => 300, 'volume' => 'гр', 'price' => 144.00, 'currency' => 'UAH', 'spec_offer' => true],
                ],
            ],
        ];

        foreach ($firstCourses as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
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

        $this->command->info('FirstCoursesSeeder completed successfully!');
    }
}
