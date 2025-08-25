<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsShortSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cocktails_short')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cocktails_short" не знайдена.');
        }

        $items = [
            [
                'title_ua' => 'Мертвий росіянин',
                'title_en' => 'White Russian',
                'description_ua' => 'Горілка, лікер «Калуа», Вершки, Коктейльна вишня',
                'description_en' => 'Vodka, liqueur "Kahlua", Cream, Maraschino cherry',
                'variants' => [
                    ['output' => 90, 'volume' => 'мл', 'price' => 199.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Драй Мартіні',
                'title_en' => 'Dry Martini',
                'description_ua' => 'Джин, вермут «Мартіні Екстра Драй», Оливка',
                'description_en' => 'Gin, vermouth "Martini Extra Dry", Olive',
                'variants' => [
                    ['output' => 85, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Іржавий цвях',
                'title_en' => 'Rusty Nail',
                'description_ua' => 'Віскі, лікер «Драмбуі», Лимонний фреш',
                'description_en' => 'Whiskey, liqueur "Drambuie", Lemon fresh',
                'variants' => [
                    ['output' => 100, 'volume' => 'мл', 'price' => 325.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Віскі Сауер',
                'title_en' => 'Whiskey Sauer',
                'description_ua' => 'Віскі, білок, Сахарний сироп, Лимонний фреш',
                'description_en' => 'Whiskey, Egg, Sugar syrup, Lemon fresh',
                'variants' => [
                    ['output' => 120, 'volume' => 'мл', 'price' => 195.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Олд Фешн',
                'title_en' => 'Old fashioned',
                'description_ua' => 'Бурбон «Буллєт», Біттер Ангостура, БонАква, Тростинний цукор',
                'description_en' => 'Bourbon "Bullet", Bitter "Angostura", BonAqua, Cane sugar',
                'variants' => [
                    ['output' => 125, 'volume' => 'мл', 'price' => 299.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Негроні',
                'title_en' => 'Negroni',
                'description_ua' => 'Джин, Мартині Россо, Кампарі, Лимонний фреш, Часточка апельсина',
                'description_en' => 'London Gin, Martini Rosso, Campari, Slice of orange',
                'variants' => [
                    ['output' => 120, 'volume' => 'мл', 'price' => 225.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Брамбл',
                'title_en' => 'Bramble',
                'description_ua' => 'Джин, лікер «Крем де Кассі», Лимонний фреш, Часточка лимона',
                'description_en' => 'Gin, liqueur "Crème de Cassis", Lemon fresh, Slice of lemon',
                'variants' => [
                    ['output' => 90, 'volume' => 'мл', 'price' => 175.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Кайпірінья',
                'title_en' => 'Caiperinia',
                'description_ua' => 'Ром золотий, Сахарний сироп, Часточка лайма',
                'description_en' => 'Rum Gold, Sugar syrup, Slice of lime',
                'variants' => [
                    ['output' => 150, 'volume' => 'мл', 'price' => 145.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Манхеттен',
                'title_en' => 'Manhattan',
                'description_ua' => 'Віскі «Джим Бім», Вермут «Мартіні Россо», Біттер Ангостура, Коктейльна вишня',
                'description_en' => 'Whiski "Jim Beam", vermouth "Martini Rosso", Bitter "Angostura", Maraschino cherry',
                'variants' => [
                    ['output' => 150, 'volume' => 'мл', 'price' => 275.00, 'currency' => 'UAH', 'spec_offer' => false],
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
