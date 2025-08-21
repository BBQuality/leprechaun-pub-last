<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartyDishesSeeder extends Seeder
{
    public function run(): void
    {
        // Знаходимо категорію "Страви на велику компанію"
        $categoryId = DB::table('menu_categories')->where('key', 'party_dishes')->value('id');

        if (!$categoryId) {
            throw new \Exception('Категорія "party_dishes" не знайдена. Спершу створи її в MenuCategoriesSeeder.');
        }

        $partyDishesItems = [
            [
                'title_ua' => 'Асорті закусок до пива',
                'title_en' => 'Assorted snacks for beer',
                'description_ua' => 'Бастурма, суджук, вуха свинячі копчені, сир копчений косичка, сир копчений в паприці, чечель копчений, перцем, суха рибка',
                'description_en' => 'Basturma, Sujuk, Smoked pork ears, Smoked cheese, Smoked cheese i paprika, Scallop smoked, Anchovies dried, Amber with pepper',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 539.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Асорті сосисок',
                'title_en' => 'Assorted sausages',
                'description_ua' => 'Асорті сосисок, картопля по-домашньому, салат з капустою, 2 соуси',
                'description_en' => 'Assorted sausages, Potato slices, Cabbage salad, 2 souces',
                'variants' => [
                    ['output' => 630/100, 'volume' => 'гр', 'price' => 649.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Вільна Контора',
                'title_en' => 'Free Kontora',
                'description_ua' => 'Смажені у фритюрі: курячі нагетси, сир-фрі, крильця барбекю, гриби-фрі, картопля скибками з часником',
                'description_en' => 'Deep Fried: Chicken Nuggets, Cheese Fries, Barbecue Wings, Fried Mushrooms, Potatoes with Garlic Slices',
                'variants' => [
                    ['output' => 700/100, 'volume' => 'гр', 'price' => 899.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'М’ясна Контора',
                'title_en' => 'Meat Kontora',
                'description_ua' => 'Свиний ошийок, курячий стейк, мисливські ковбаски, картопля скибками з часником, 3 соуси',
                'description_en' => 'Pork neck, chicken steak, hunting sausages, potatoes with garlic cloves, 3 sauces',
                'variants' => [
                    ['output' => 1000/150, 'volume' => 'гр', 'price' => 1199.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Пивна Дошка',
                'title_en' => 'Beer Board',
                'description_ua' => 'Грінки, чіпси-начос, цибулеві кільця, 2 соуси',
                'description_en' => 'Croutons, nachos chips, onion rings, 2 sauces',
                'variants' => [
                    ['output' => 350, 'volume' => 'гр', 'price' => 319.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Під водочку',
                'title_en' => 'With Vodka',
                'description_ua' => 'Оселедець, огірки, помідори черрі, сало, грінки з часником, смажена картопля, гірчиця',
                'description_en' => 'Herring, cucumbers, cherry tomatoes, salo, crepes with garlic, fried potatoes, mustard',
                'variants' => [
                    ['output' => 500/50, 'volume' => 'гр', 'price' => 499.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Свиняча рулька',
                'title_en' => 'Pork knuckle',
                'description_ua' => 'Свиняча рулька запечена в соусі барбекю, картопля по-домашньому, різносоли, 2 соуси',
                'description_en' => 'Pork knukle baked in barbecue sauce, Potato slices, Salting, 2 souces',
                'variants' => [
                    ['output' => 100, 'volume' => 'гр', 'price' => 99.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
            [
                'title_ua' => 'Від Душі',
                'title_en' => 'With all one\'s heart',
                'description_ua' => 'Шмат свинини ошийок, шмат курячого філе, ребра копчені запечені в соусі барбекю, крильця в соусі барбекю, різносоли, картопля по-домашньому, 3 соуси',
                'description_en' => 'Pork neck steak, Chicken fillet steak, Smoked ribs baked in barbecue sauce, Chicken wings in barbecue sauce, Salting, Potato slices, 3 souces',
                'variants' => [
                    ['output' => 2300/150, 'volume' => 'гр', 'price' => 1859.00, 'currency' => 'UAH', 'spec_offer' => false],
                ],
            ],
        ];

        foreach ($partyDishesItems as $item) {
            $menuItemId = DB::table('menu_items')->insertGetId([
                'category_id'    => $categoryId,
                'title_ua'       => $item['title_ua'],
                'title_en'       => $item['title_en'],
                'description_ua' => $item['description_ua'],
                'description_en' => $item['description_en'],
                'created_at'   => now(),
                'updated_at'   => now(),
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
