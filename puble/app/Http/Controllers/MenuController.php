<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;

class MenuController extends Controller
{
    public function index()
    {
         $categories = \App\Models\MenuCategory::with(['items.variants'])->get();

    // Групуємо по типу
    $groupedMenu = $categories->groupBy('type');
    // де 'type' у таблиці menu_categories: eat | drink

    return view('index', compact('groupedMenu'));
    }
}
