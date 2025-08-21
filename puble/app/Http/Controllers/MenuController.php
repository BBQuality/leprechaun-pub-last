<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;

class MenuController extends Controller
{
    public function index()
    {
        // Завантажуємо категорії разом з позиціями та варіантами
        $categories = MenuCategory::with(['items.variants'])->get();

        // Групуємо по типу
        $groupedMenu = $categories->groupBy('type');

        return view('index', compact('groupedMenu'));
    }
}
