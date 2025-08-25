<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CocktailsLongSeeder extends Seeder
{
    public function run(): void
    {
        $categoryId = DB::table('menu_categories')->where('key', 'cocktails_long')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "cocktails_long" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $items = [
            [
                'title_ua' => 'Бе-тон',
                'title_en' => 'Be-tone',
                'description_ua' => 'Бехеровка, Тонік, Часточка лимона',
                'description_en' => 'Becherovka, Tonic, Slice of lemon',
                'variants' => [
                    ['output' => 250, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Кривава Мері',
                'title_en' => 'Bloody Mary',
                'description_ua' => 'Сік «Томат», Горілка, Спеції, Часточка лимона, Лимонний фреш, Сахарний сироп, Соус Ворчестер, Соєвий соус',
                'description_en' => 'Tomato juice, Vodka, Spices, Slice of lemon, Lemon fresh, Sugar syrup, Worcestershire sauce, Soy sauce',
                'variants' => [
                    ['output' => 320, 'volume' => 'мл', 'price' => 185.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Блакитні Гаваї',
                'title_en' => 'Blue Hawaii',
                'description_ua' => 'Ром білий, Малібу, Блю Кюрасао, сік «Ананас»',
                'description_en' => 'White rum, Malibu, Blue Curacao, Pineapple juice',
                'variants' => [
                    ['output' => 250, 'volume' => 'мл', 'price' => 245.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Дайкірі полуничний',
                'title_en' => 'Strawberry daiquiri',
                'description_ua' => 'Ром білий, лікер «Полуниця», Лимонний фреш, Сахарний сироп',
                'description_en' => 'White rum, Strawberry liqueur, Lemon fresh, Sugar syrup',
                'variants' => [
                    ['output' => 150, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Джин Тонік',
                'title_en' => 'Gin Tonic',
                'description_ua' => 'Джин, Тонік, Часточка лимона',
                'description_en' => 'Gin, Tonic, Slice of lemon',
                'variants' => [
                    ['output' => 250, 'volume' => 'мл', 'price' => 185.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Куба лібре',
                'title_en' => 'Cuba Libre',
                'description_ua' => 'Ром чорний, Кока-кола, Часточка лайма',
                'description_en' => 'Dark rum, Coca-Cola, Slice of lime',
                'variants' => [
                    ['output' => 250, 'volume' => 'мл', 'price' => 185.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Лонг Айленд',
                'title_en' => 'Long Island',
                'description_ua' => 'Текіла, Горілка, Лимонний фреш, Джин, лікер «Тріпл сек», Ром білий, Кока-кола, Сахарний сироп, Часточка лимона',
                'description_en' => 'Tequila, Vodka, Lemon fresh, Gin, Triple sec, White rum, Coca-Cola, Sugar syrup, Slice of lemon',
                'variants' => [
                    ['output' => 400, 'volume' => 'мл', 'price' => 319.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Мохіто',
                'title_en' => 'Mojito',
                'description_ua' => 'Ром, свіжа м’ята, Спрайт, Лайм, Тростинний цукор',
                'description_en' => 'Rum, Fresh mint, Sprite, Lime, Cane sugar',
                'variants' => [
                    ['output' => 280, 'volume' => 'мл', 'price' => 230.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Піна Колада',
                'title_en' => 'Pina Colada',
                'description_ua' => 'Ром білий, лікер «Малібу», сік «Ананас», Вершки',
                'description_en' => 'White rum, Malibu liqueur, Pineapple juice, Cream',
                'variants' => [
                    ['output' => 220, 'volume' => 'мл', 'price' => 165.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Секс на пляжі',
                'title_en' => 'Sex on the beach',
                'description_ua' => 'Горілка, сік «Персик», лікер «Персик», сироп «Гренадін»',
                'description_en' => 'Vodka, Peach juice, Peach liqueur, Grenadine syrup',
                'variants' => [
                    ['output' => 300, 'volume' => 'мл', 'price' => 195.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Сік джунглів',
                'title_en' => 'Jungle juice',
                'description_ua' => 'Джин, лікер «Пізан», сік «Апельсин», Часточка апельсина',
                'description_en' => 'Gin, Pisang liqueur, Orange juice, Slice of orange',
                'variants' => [
                    ['output' => 315, 'volume' => 'мл', 'price' => 195.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Текіла Санрайз',
                'title_en' => 'Tequila Sunrise',
                'description_ua' => 'Текіла, сік «Апельсин», Гренадін, Часточка апельсина, Коктейльна вишня',
                'description_en' => 'Tequila, Orange juice, Grenadine, Slice of orange, Maraschino cherry',
                'variants' => [
                    ['output' => 300, 'volume' => 'мл', 'price' => 215.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Апероль Шприц',
                'title_en' => 'Aperol spritz',
                'description_ua' => 'БонАква, Шампанське, лікер «Апероль», Часточка апельсина',
                'description_en' => 'BonAqua, Champagne, Aperol liqueur, Slice of orange',
                'variants' => [
                    ['output' => 250, 'volume' => 'мл', 'price' => 195.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Хрещений батько',
                'title_en' => 'The Godfather',
                'description_ua' => 'Віскі, Амаретто, Кола',
                'description_en' => 'Whiskey, Amaretto, Coca-Cola',
                'variants' => [
                    ['output' => 230, 'volume' => 'мл', 'price' => 215.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Космополітен',
                'title_en' => 'Cosmopolitan',
                'description_ua' => 'Горілка, лікер «Тріпл сек», Морс, Часточка апельсина',
                'description_en' => 'Vodka, Triple sec, Fruit drink, Slice of orange',
                'variants' => [
                    ['output' => 200, 'volume' => 'мл', 'price' => 155.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Джинджер Бріз',
                'title_en' => 'Ginger Breeze',
                'description_ua' => 'Джин, лікер «Крем де Кассі», Імбирний ель, Лимонний фреш',
                'description_en' => 'Gin, Crème de Cassis liqueur, Ginger ale, Lemon fresh',
                'variants' => [
                    ['output' => 255, 'volume' => 'мл', 'price' => 215.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Май Тай',
                'title_en' => 'Mai-Tai',
                'description_ua' => 'Ром білий, Ром чорний, лікер «Тріпл сек», лікер «Амаретто», сік «Ананас», Лимонний фреш',
                'description_en' => 'White rum, Dark rum, Triple sec, Amaretto, Pineapple juice, Lemon fresh',
                'variants' => [
                    ['output' => 300, 'volume' => 'мл', 'price' => 265.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Ірландський ірландець',
                'title_en' => 'Irish Irish',
                'description_ua' => 'Пиво «Гіннес», Віскі, лікер «Бейліз»',
                'description_en' => 'Guinness beer, Whiskey, Baileys liqueur',
                'variants' => [
                    ['output' => 200, 'volume' => 'мл', 'price' => 285.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Камікадзе',
                'title_en' => 'Kamikadze',
                'description_ua' => 'Горілка, лікер «Тріпл сек», Лимонний фреш',
                'description_en' => 'Vodka, Triple sec, Lemon fresh',
                'variants' => [
                    ['output' => 200, 'volume' => 'мл', 'price' => 135.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Зомбі',
                'title_en' => 'Zombie',
                'description_ua' => 'Ром чорний, Ром золотий, Сахарний сироп, Лимонний фреш, сік «Грейпфрукт», Часточка апельсина',
                'description_en' => 'Dark rum, Gold rum, Sugar syrup, Lemon fresh, Grapefruit juice, Slice of orange',
                'variants' => [
                    ['output' => 350, 'volume' => 'мл', 'price' => 295.00, 'currency' => 'UAH', 'spec_offer' => false],
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
