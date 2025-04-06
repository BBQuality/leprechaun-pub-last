<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;


class MenuController extends Controller
{
    public function showMenu()
    {
        $menuItems = MenuItem::with('variants')->get();
    
        // Групуємо спочатку за 'type' (їжа, напої), потім за 'category_ua' (категорія всередині)
        $groupedMenu = $menuItems->groupBy(['type', 'category_ua']);
    
        return view('index', compact('groupedMenu'));
    }
    
}
