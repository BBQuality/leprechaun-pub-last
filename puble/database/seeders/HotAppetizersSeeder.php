<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotAppetizersSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'hot_appetizers')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "hot_appetizers" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        $hotSnacks = [
            ['title_ua' => 'Баклажани запечені з куркою та моцарелою', 'title_en' => 'Eggplants baked with chicken and mozzarella', 'output' => 320, 'volume' => 'гр', 'price' => 274.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Fish&Chips', 'title_en' => 'Fish&Chips', 'output' => 300, 'volume' => 'гр', 'price' => 354.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Сир фрі', 'title_en' => 'Cheese fries', 'output' => 250, 'volume' => 'гр', 'price' => 264.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Крильця Барбекю', 'title_en' => 'Chicken Wings Barbecue', 'output' => 300, 'volume' => 'гр', 'price' => 229.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Крильця Кентуккі', 'title_en' => 'Chicken Wings Kentucky', 'output' => 300, 'volume' => 'гр', 'price' => 264.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Ірландські гриби', 'title_en' => 'Irish mushrooms', 'output' => 250, 'volume' => 'гр', 'price' => 209.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Ребра копчені,запечені в соусі барбекю', 'title_en' => 'Smoked ribs, baked in barbecue sauce', 'output' => 300, 'volume' => 'гр', 'price' => 429.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Ковбаски мисливські та картопля фрі', 'title_en' => 'Hunting sausages with potatoes fries', 'output' => 150, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Курячі нагетси', 'title_en' => 'Chicken Nuggets', 'output' => 200, 'volume' => 'гр', 'price' => 229.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Гриби фрі', 'title_en' => 'Fried mushrooms', 'output' => 200, 'volume' => 'гр', 'price' => 174.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Цибулеві кільця', 'title_en' => 'Onion rings', 'output' => 180, 'volume' => 'гр', 'price' => 189.00, 'currency' => 'UAH', 'spec_offer' => false],
        ];

        foreach ($hotSnacks as $snack) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $snack['title_ua'],
                'title_en'       => $snack['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            DB::table('menu_item_variants')->insert([
                'menu_item_id' => $menuItemId,
                'output'       => $snack['output'],
                'volume'       => $snack['volume'],
                'price'        => $snack['price'],
                'currency'     => $snack['currency'],
                'spec_offer'   => $snack['spec_offer'],
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
        }
    }
}
