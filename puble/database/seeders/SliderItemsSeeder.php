<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderItemsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('slider_items')->insert([
            [
                'title' => 'Соковитий Бургер',
                'description' => 'Яловичина, салат, сир, соус, булочка з кунжутом',
                'slogan' => 'Спробуй справжній смак!',
                'price' => 199.00,
                'image' => 'images/slider/burger.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Домашня Піца',
                'description' => 'Сир моцарела, томатний соус, шинка, базилік',
                'slogan' => 'Наче з італійської печі',
                'price' => 249.00,
                'image' => 'images/slider/pizza.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Салат Цезар',
                'description' => 'Курка гриль, листя салату, сухарики, соус Цезар',
                'slogan' => 'Легко та смачно',
                'price' => 159.00,
                'image' => 'images/slider/caesar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
