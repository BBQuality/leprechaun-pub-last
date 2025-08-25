<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsNonAlcoholicSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cocktails_nonalcoholic')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cocktails_nonalcoholic" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Холодний Чай',
                'title_en' => 'Cold tea',
                'description_ua' => 'Чай, Лимон, сироп «Гренадін», Сахарний сироп, Лимонний фреш',
                'description_en' => 'Tea, Lemon, syrup "Grenadine", Lemon fresh, Sugar syrup',
                'variants' => [
                    ['output' => 450, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Мохіто б/а',
                'title_en' => 'Mojito n/a',
                'description_ua' => 'М\'ята, Лайм, Тростинний цукор, Спрайт',
                'description_en' => 'Mint, Lime, Cane sugar, Sprite',
                'variants' => [
                    ['output' => 400, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сік джунглів б/а',
                'title_en' => 'Jungle juice n/a',
                'description_ua' => 'сік «Мультіфрукт», сік «Ананас», сік «Грейпфрукт», сироп «Гренадін»',
                'description_en' => 'juice "Multifruit", juice "Pineapple", juice "Grapefruit", syrup "Grenadine"',
                'variants' => [
                    ['output' => 400, 'volume' => 'мл', 'price' => 135.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($items as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id' => $categoryId,
                'title_ua' => $item['title_ua'],
                'title_en' => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
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
