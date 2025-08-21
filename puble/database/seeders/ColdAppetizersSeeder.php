<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColdAppetizersSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cold_appetizers')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cold_appetizers" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        $coldAppetizers = [
            ['title_ua' => 'Оселедець з цибулею та печеною картоплею', 'title_en' => 'Herring and onions with baked potatoes', 'output' => 250, 'volume' => 'гр', 'price' => 174.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Сало', 'title_en' => 'Salo', 'output' => 100, 'volume' => 'гр', 'price' => 174.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Різносоли', 'title_en' => 'Pickled vegetables and mushrooms', 'output' => 500, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Карпаччо', 'title_en' => 'Carpaccio', 'output' => 170, 'volume' => 'гр', 'price' => 254.00, 'currency' => 'UAH', 'spec_offer' => false],
        ];

        foreach ($coldAppetizers as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            DB::table('menu_item_variants')->insert([
                'menu_item_id' => $menuItemId,
                'output'       => $item['output'],
                'volume'       => $item['volume'],
                'price'        => $item['price'],
                'currency'     => $item['currency'],
                'spec_offer'   => $item['spec_offer'],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
