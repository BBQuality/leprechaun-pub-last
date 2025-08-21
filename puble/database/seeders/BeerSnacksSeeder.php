<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSnacksSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'beer_snacks')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "beer_snacks" не знайдена. Запусти спершу MenuCategoriesSeeder.');
        }

        $beerSnacks = [
            ['title_ua' => 'Бастурма', 'title_en' => 'Basturma', 'output' => 60, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Суджук', 'title_en' => 'Sujuk', 'output' => 65, 'volume' => 'гр', 'price' => 164.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Тарілка до пива', 'title_en' => 'Plate to Beer', 'output' => 150, 'volume' => 'гр', 'price' => 184.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Вуха до пива', 'title_en' => 'Ears to Beer', 'output' => 100, 'volume' => 'гр', 'price' => 119.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Чіпси Начос', 'title_en' => 'Chips Nachos', 'output' => 50, 'volume' => 'гр', 'price' => 99.00,'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Грінки з соусом', 'title_en' => 'Crepes with sauce', 'output' => 150, 'volume' => 'гр', 'price' => 109.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Рибка до пива', 'title_en' => 'Fish to Beer', 'output' => 80, 'volume' => 'гр', 'price' => 179.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Мойва', 'title_en' => 'Capelin', 'output' => 300, 'volume' => 'гр', 'price' => 239.00, 'currency' => 'UAH', 'spec_offer' => false],
            ['title_ua' => 'Горішки до пива', 'title_en' => 'Nuts for beer', 'output' => 100, 'volume' => 'гр', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
        ];

        foreach ($beerSnacks as $snack) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $snack['title_ua'],
                'title_en'       => $snack['title_en'],
                'description_ua' => '',
                'description_en' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('menu_item_variants')->insert([
                'menu_item_id' => $menuItemId,
                'output'       => $snack['output'],
                'volume'       => $snack['volume'],
                'price'        => $snack['price'],
                'currency'     => 'UAH',
                'spec_offer'   => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
