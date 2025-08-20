<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuCategory;

class MenuCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        // ВЕРХНІ РІВНІ
        $food = MenuCategory::create([
            'key' => 'food_root', 'type' => 'food',
            'title_ua' => 'Страви', 'title_en' => 'Food', 'sort_order' => 1
        ]);

        $drink = MenuCategory::create([
            'key' => 'drink_root', 'type' => 'drink',
            'title_ua' => 'Напої', 'title_en' => 'Drinks', 'sort_order' => 2
        ]);

        // FOOD підкатегорії
        $foodCategories = [
            ['salads','Салати','Salads'],
            ['first_courses','Перші страви','First courses'],
            ['pasta','Пасти','Pasta'],
            ['beer_snacks','Закуски до пива','Beer snacks'],
            ['cold_appetizers','Холодні закуски','Cold appetizers'],
            ['hot_appetizers','Гарячі закуски','Hot appetizers'],
            ['fish_dishes','Рибні страви','Fish dishes'],
            ['josper_menu','Хоспер-меню','Josper menu'],
            ['pans','Пательні','Pans'],
            ['side_dishes','Гарніри','Side dishes'],
            ['burgers','Бургери','Burgers'],
            ['sandwiches','Сендвічі','Sandwiches'],
            ['bread','Хліб','Bread'],
            ['desserts','Десерти','Desserts'],
            ['party_dishes','Страви на велику компанію','Party dishes'],
        ];

        foreach ($foodCategories as $i => [$key,$ua,$en]) {
            MenuCategory::create([
                'key' => $key, 'parent_id' => $food->id, 'type' => 'food',
                'title_ua' => $ua, 'title_en' => $en, 'sort_order' => $i+1
            ]);
        }

        // DRINK підкатегорії (включно з коктейлями)
        $drinkCategories = [
            ['beer_draught','Пиво та сидр','Beer & Cider'],
            ['beer_bottled','Пиво в пляшках','Bottled beer'],
            ['horilka','Горілка','Vodka'],
            ['special_alcohol_offer','Спец. алкопропозиція','Special alcohol offer'],
            ['brandy_cognac','Бренді та коньяк','Brandy & Cognac'],
            ['gin_rum_tequila','Джин/Ром/Текіла','Gin/Rum/Tequila'],
            ['liqueur','Лікер','Liqueur'],
            ['whisky','Віскі','Whisky'],
            ['vermouth_infusion','Настоянки та вермути','Infusions & Vermouth'],
            ['wine_georgia','Вина Грузії','Georgian wines'],
            ['wine_chile','Вина Чилі','Chilean wines'],
            ['wine_france','Вина Франції','French wines'],
            ['wine_sparkling','Ігристі вина','Sparkling wines'],
            ['soft_drinks','Безалкогольні напої','Soft drinks'],
            ['coffee_tea','Чай та кава','Tea & Coffee'],
        ];

        foreach ($drinkCategories as $i => [$key,$ua,$en]) {
            MenuCategory::create([
                'key' => $key, 'parent_id' => $drink->id, 'type' => 'drink',
                'title_ua' => $ua, 'title_en' => $en, 'sort_order' => $i+1
            ]);
        }

        // Коктейлі — ще один рівень (під "Напої")
        $cocktails = MenuCategory::create([
            'key' => 'cocktails_root', 'parent_id' => $drink->id, 'type' => 'drink',
            'title_ua' => 'Коктейлі', 'title_en' => 'Cocktails', 'sort_order' => 99
        ]);

        $cocktailCats = [
            ['cocktails_long','Лонгі','Long'],
            ['cocktails_shots','Шоти','Shots'],
            ['cocktails_short','Шорти','Short'],
            ['cocktails_hot','Гарячі коктейлі','Hot cocktails'],
            ['cocktails_nonalcoholic','Безалкогольні коктейлі','Non-alcoholic cocktails'],
        ];

        foreach ($cocktailCats as $i => [$key,$ua,$en]) {
            MenuCategory::create([
                'key' => $key, 'parent_id' => $cocktails->id, 'type' => 'drink',
                'title_ua' => $ua, 'title_en' => $en, 'sort_order' => $i+1
            ]);
        }
    }
}
