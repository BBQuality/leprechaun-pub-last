<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuCategory;

class MenuCategoriesSeeder extends Seeder
{
    public function run(): void
    {
        // Батьківські категорії
        $parents = [
            ['key' => 'food', 'title_ua' => 'Їжа', 'title_en' => 'Food', 'type' => 'food', 'sort_order' => 1],
            ['key' => 'drink', 'title_ua' => 'Напої', 'title_en' => 'Drink', 'type' => 'drink', 'sort_order' => 2],
            ['key' => 'cocktails', 'title_ua' => 'Коктейлі', 'title_en' => 'Cocktails', 'type' => 'cocktail', 'sort_order' => 3],
        ];

        foreach ($parents as $parent) {
            MenuCategory::updateOrCreate(
                ['key' => $parent['key']],
                $parent
            );
        }

        // Отримуємо ID батьків
        $foodId = MenuCategory::where('key', 'food')->first()->id;
        $drinkId = MenuCategory::where('key', 'drink')->first()->id;
        $cocktailsId = MenuCategory::where('key', 'cocktails')->first()->id;

        // Підкатегорії
        $subcategories = [
            // Food
            ['key' => 'salads', 'title_ua' => 'Салати', 'title_en' => 'Salads', 'sort_order' => 1, 'parent_id' => $foodId],
            ['key' => 'first_courses', 'title_ua' => 'Перші страви', 'title_en' => 'First courses', 'sort_order' => 2, 'parent_id' => $foodId],
            ['key' => 'pasta', 'title_ua' => 'Пасти', 'title_en' => 'Pasta', 'sort_order' => 3, 'parent_id' => $foodId],
            ['key' => 'beer_snacks', 'title_ua' => 'Закуски до пива', 'title_en' => 'Beer snacks', 'sort_order' => 4, 'parent_id' => $foodId],
            ['key' => 'cold_appetizers', 'title_ua' => 'Холодні закуски', 'title_en' => 'Cold appetizers', 'sort_order' => 5, 'parent_id' => $foodId],
            ['key' => 'hot_appetizers', 'title_ua' => 'Гарячі закуски', 'title_en' => 'Hot appetizers', 'sort_order' => 6, 'parent_id' => $foodId],
            ['key' => 'fish_dishes', 'title_ua' => 'Рибні страви', 'title_en' => 'Fish dishes', 'sort_order' => 7, 'parent_id' => $foodId],
            ['key' => 'josper_menu', 'title_ua' => 'Хоспер-меню', 'title_en' => 'Josper menu', 'sort_order' => 8, 'parent_id' => $foodId],
            ['key' => 'pans', 'title_ua' => 'Пательні', 'title_en' => 'Pans', 'sort_order' => 9, 'parent_id' => $foodId],
            ['key' => 'side_dishes', 'title_ua' => 'Гарніри', 'title_en' => 'Side dishes', 'sort_order' => 10, 'parent_id' => $foodId],
            ['key' => 'burgers', 'title_ua' => 'Бургери', 'title_en' => 'Burgers', 'sort_order' => 11, 'parent_id' => $foodId],
            ['key' => 'sandwiches', 'title_ua' => 'Сендвічі', 'title_en' => 'Sandwiches', 'sort_order' => 12, 'parent_id' => $foodId],
            ['key' => 'bread', 'title_ua' => 'Хліб', 'title_en' => 'Bread', 'sort_order' => 13, 'parent_id' => $foodId],
            ['key' => 'desserts', 'title_ua' => 'Десерти', 'title_en' => 'Desserts', 'sort_order' => 14, 'parent_id' => $foodId],
            ['key' => 'party_dishes', 'title_ua' => 'Страви на велику компанію', 'title_en' => 'Party dishes', 'sort_order' => 15, 'parent_id' => $foodId],

            // Drink
            ['key' => 'beer_draught', 'title_ua' => 'Пиво та сидр', 'title_en' => 'Beer & Cider', 'sort_order' => 1, 'parent_id' => $drinkId],
            ['key' => 'beer_bottled', 'title_ua' => 'Пиво в пляшках', 'title_en' => 'Bottled beer', 'sort_order' => 2, 'parent_id' => $drinkId],
            ['key' => 'horilka', 'title_ua' => 'Горілка', 'title_en' => 'Vodka', 'sort_order' => 3, 'parent_id' => $drinkId],
            ['key' => 'special_alcohol_offer', 'title_ua' => 'Спец. алкопропозиція', 'title_en' => 'Special alcohol offer', 'sort_order' => 4, 'parent_id' => $drinkId],
            ['key' => 'brandy_cognac', 'title_ua' => 'Бренді та коньяк', 'title_en' => 'Brandy & Cognac', 'sort_order' => 5, 'parent_id' => $drinkId],
            ['key' => 'gin_rum_tequila', 'title_ua' => 'Джин/Ром/Текіла', 'title_en' => 'Gin/Rum/Tequila', 'sort_order' => 6, 'parent_id' => $drinkId],
            ['key' => 'liqueur', 'title_ua' => 'Лікер', 'title_en' => 'Liqueur', 'sort_order' => 7, 'parent_id' => $drinkId],
            ['key' => 'whisky', 'title_ua' => 'Віскі', 'title_en' => 'Whisky', 'sort_order' => 8, 'parent_id' => $drinkId],
            ['key' => 'vermouth_infusion', 'title_ua' => 'Настоянки та вермути', 'title_en' => 'Infusions & Vermouth', 'sort_order' => 9, 'parent_id' => $drinkId],
            ['key' => 'wine_georgia', 'title_ua' => 'Вина Грузії', 'title_en' => 'Georgian wines', 'sort_order' => 10, 'parent_id' => $drinkId],
            ['key' => 'wine_chile', 'title_ua' => 'Вина Чилі', 'title_en' => 'Chilean wines', 'sort_order' => 11, 'parent_id' => $drinkId],
            ['key' => 'wine_france', 'title_ua' => 'Вина Франції', 'title_en' => 'French wines', 'sort_order' => 12, 'parent_id' => $drinkId],
            ['key' => 'wine_sparkling', 'title_ua' => 'Ігристі вина', 'title_en' => 'Sparkling wines', 'sort_order' => 13, 'parent_id' => $drinkId],
            ['key' => 'soft_drinks', 'title_ua' => 'Безалкогольні напої', 'title_en' => 'Soft drinks', 'sort_order' => 14, 'parent_id' => $drinkId],
            ['key' => 'coffee_tea', 'title_ua' => 'Чай та кава', 'title_en' => 'Tea & Coffee', 'sort_order' => 15, 'parent_id' => $drinkId],

            // Cocktails
            ['key' => 'cocktails_long', 'title_ua' => 'Лонгі', 'title_en' => 'Long', 'sort_order' => 1, 'parent_id' => $cocktailsId],
            ['key' => 'cocktails_shots', 'title_ua' => 'Шоти', 'title_en' => 'Shots', 'sort_order' => 2, 'parent_id' => $cocktailsId],
            ['key' => 'cocktails_short', 'title_ua' => 'Шорти', 'title_en' => 'Short', 'sort_order' => 3, 'parent_id' => $cocktailsId],
            ['key' => 'cocktails_hot', 'title_ua' => 'Гарячі коктейлі', 'title_en' => 'Hot cocktails', 'sort_order' => 4, 'parent_id' => $cocktailsId],
            ['key' => 'cocktails_nonalcoholic', 'title_ua' => 'Безалкогольні коктейлі', 'title_en' => 'Non-alcoholic cocktails', 'sort_order' => 5, 'parent_id' => $cocktailsId],
        ];

        foreach ($subcategories as $subcategory) {
            $parent = MenuCategory::find($subcategory['parent_id']);
            $subcategory['type'] = $parent->key; // наслідуємо type від батька
            MenuCategory::updateOrCreate(
                ['key' => $subcategory['key']],
                $subcategory
            );
        }
    }
}
