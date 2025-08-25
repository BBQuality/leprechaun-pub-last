<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsShotsSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cocktails_shots')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cocktails_shots" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Слава Україні',
                'title_en' => 'Glory to Ukraine',
                'description_ua' => 'Горілка, сік «Апельсин», лікер «Блю Кюрасао»',
                'description_en' => 'Vodka, juice "Orange", liqueur Blue Curacao',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 115.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'ПТН ПНХ',
                'title_en' => 'PTN PNH',
                'description_ua' => 'Горілка, сироп “Греннадін”, Бейліс, Блю-Кюрасао',
                'description_en' => 'Vodka, Syrup “Grennadine”, liqueur "Baileys", liqueur Blue Curacao',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Смерть ворогам',
                'title_en' => 'Death to enemies',
                'description_ua' => 'Самбука, Абсент, лікер “М’ята”, Лимонний фреш',
                'description_en' => 'Sambuca, Absinthe, liqueur "Mint", Lemon fresh',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'БМВ',
                'title_en' => 'BMW',
                'description_ua' => 'Лікер «Бейліз», лікер «Малібу», Віскі',
                'description_en' => 'Liqueur "Baileys", liqueur "Malibu", Whiskey',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Швидкий трах',
                'title_en' => 'Quick f uck',
                'description_ua' => 'Лікер «Калуа», лікер «Бейліз», лікер «Мелон»',
                'description_en' => 'Liqueur "Kahlua", liqueur "Baileys", liqueur "Melon"',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Бичаче око',
                'title_en' => "Bull's eye",
                'description_ua' => 'Самбука, Абсент, Текіла, Коктейльна вишня',
                'description_en' => 'Sambuca, Absinthe, Tequila, Maraschino cherry',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 185.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Б-52',
                'title_en' => 'B-52',
                'description_ua' => 'Лікер «Калуа», лікер «Бейліз», лікер «Тріпл Сек»',
                'description_en' => 'Liqueur "Kahlua", liqueur "Baileys", liqueur "Triple Sec"',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Зелений мексиканець',
                'title_en' => 'Green Mexican',
                'description_ua' => 'Лікер «Пізан», Лимонний фреш, Текіла',
                'description_en' => 'Liqueur "Pisang", Lemon fresh, Tequila',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Хіросіма',
                'title_en' => 'Hiroshima',
                'description_ua' => 'Самбука, лікер «Бейліз», Абсент, сироп «Гренадін»',
                'description_en' => 'Sambuca, Baileys, Absinthe, "Grenadine"',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лепрекон',
                'title_en' => 'Leprechaun',
                'description_ua' => 'Калуа, Самбука, Бейліз, Абсент, Тріпл сек',
                'description_en' => 'Kahlua, Sambuca, Baileys, Absinthe, Triple sec',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 195.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Електроліт',
                'title_en' => 'Electrolyte',
                'description_ua' => 'Самбука, Єгермейстер, Абсент',
                'description_en' => 'Sambuca, Jägermeister, Absinthe',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 185.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Програміст',
                'title_en' => 'Programmer',
                'description_ua' => 'Лікер «Персик», «Мелон», Лимонний фреш, Єгермейстер',
                'description_en' => 'Liqueur "Peach", "Melon", Lemon fresh, Jägermeister',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 160.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Медуза',
                'title_en' => 'Jellyfish',
                'description_ua' => 'Білий ром, лікер «Бейліз», лікер «Малібу», лікер «Блю Кюрасао»',
                'description_en' => 'White rum, liqueur "Baileys", liqueur "Malibu", liqueur "Blue Curacao"',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Барак Обама',
                'title_en' => 'Barack Obama',
                'description_ua' => 'Лікери: «Пеппер Мінт»,«Бейліз»,«Калуа»,«Тріпл сек», Єгермейстер',
                'description_en' => 'Liqueur "Pepper Mint", liqueur "Baileys", liqueur "Kahlua", liqueur "Triple sec", Jägermeister',
                'variants' => [
                    ['output' => 60, 'volume' => 'мл', 'price' => 180.00, 'currency' => 'UAH', 'spec_offer' => false],
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
