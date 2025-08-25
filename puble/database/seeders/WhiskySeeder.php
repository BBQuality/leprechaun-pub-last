<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhiskySeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'whisky')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "whisky" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            ['title_ua' => "William Lawson’s", 'title_en' => "William Lawson’s", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 120.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Hankey Bannister", 'title_en' => "Hankey Bannister", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Jim Beam Original", 'title_en' => "Jim Beam Original", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Jameson", 'title_en' => "Jameson", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 169.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Jack Daniel’s", 'title_en' => "Jack Daniel’s", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 179.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Jack Daniel’s Honey", 'title_en' => "Jack Daniel’s Honey", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Ballantines", 'title_en' => "Ballantines", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Bushmills Original", 'title_en' => "Bushmills Original", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 180.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Bushmills Black Bush", 'title_en' => "Bushmills Black Bush", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 265.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Johnnie Walker Red Label", 'title_en' => "Johnnie Walker Red Label", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 150.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Johnnie Walker Black Label", 'title_en' => "Johnnie Walker Black Label", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 275.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Glenfiddich", 'title_en' => "Glenfiddich", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 399.00, 'currency' => 'UAH', 'spec_offer' => false]]],
            ['title_ua' => "Bourbon Bulleit", 'title_en' => "Bourbon Bulleit", 'variants' => [['output' => 50, 'volume' => 'мл', 'price' => 225.00, 'currency' => 'UAH', 'spec_offer' => false]]],
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
