<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\MenuItemVariant;
use App\Models\Drink;
use Illuminate\Support\Facades\DB;

class MenuEditorController extends Controller
{
    public function indexDrink()
    {
        $drinks = Drink::with('menuItem')->get();

        return view('admin.menu_editor.drink.index', compact('drinks'));
    }

    public function createDrinkForm()
    {
        return view('admin.menu_editor.drink.create');
    }

    public function storeDrink(Request $request)
    {
        $validated = $request->validate([
            'title_ua' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_ua' => 'nullable|string',
            'description_en' => 'nullable|string',
            'output_1' => 'required|string|max:50',
            'price_1' => 'required|numeric|min:0',
            'output_2' => 'nullable|string|max:50',
            'price_2' => 'nullable|numeric|min:0',
            'volume' => 'nullable|string|max:20',
            'currency' => 'required|string|max:10',
            'id_category' => 'required|integer',
            'category_ua' => 'nullable|string|max:50',
            'category_en' => 'nullable|string|max:50',
            'spec_offer' => 'nullable|boolean',
        ]);

        DB::transaction(function () use ($validated) {
            $menuItem = MenuItem::create([
                'type' => 'drink',
                'category_ua' => $validated['category_ua'] ?? null,
                'category_en' => $validated['category_en'] ?? null,
                'title_ua' => $validated['title_ua'],
                'title_en' => $validated['title_en'],
                'description_ua' => $validated['description_ua'] ?? null,
                'description_en' => $validated['description_en'] ?? null,
                'id_category' => $validated['id_category'],
                'spec_offer' => $validated['spec_offer'] ?? 0,
            ]);

            // створюємо запис у таблиці drink з тим самим id
            $drink = Drink::create(array_merge($validated, ['id' => $menuItem->id]));

            // створення одного або двох варіантів
            MenuItemVariant::create([
                'menu_item_id' => $menuItem->id,
                'output' => $validated['output_1'],
                'volume' => $validated['volume'] ?? '',
                'price' => $validated['price_1'],
                'currency' => $validated['currency'],
            ]);

            if (!empty($validated['output_2']) && !empty($validated['price_2'])) {
                MenuItemVariant::create([
                    'menu_item_id' => $menuItem->id,
                    'output' => $validated['output_2'],
                    'volume' => $validated['volume'] ?? '',
                    'price' => $validated['price_2'],
                    'currency' => $validated['currency'],
                ]);
            }
        });

        return redirect()->route('menu-editor.drink.index')->with('success', 'Напій додано!');
    }

        public function editDrinkForm($id)
    {
        $drink = Drink::with('menuItem')->findOrFail($id);
        return view('admin.menu_editor.drink.edit', compact('drink'));
    }

    public function updateDrink(Request $request, $id)
{
    
    $validated = $request->validate([
        'title_ua' => 'required|string|max:255',
        'title_en' => 'nullable|string|max:255',
        'description_ua' => 'nullable|string',
        'description_en' => 'nullable|string',
        'output_1' => 'required|string|max:50',
        'price_1' => 'required|numeric|min:0',
        'output_2' => 'nullable|string|max:50',
        'price_2' => 'nullable|numeric|min:0',
        'volume' => 'nullable|string|max:20',
        'currency' => 'required|string|max:10',
        'id_category' => 'required|integer',
        'category_ua' => 'nullable|string|max:50',
        'category_en' => 'nullable|string|max:50',
        'spec_offer' => 'nullable|boolean',
    ]);
    dd($validated);
    DB::transaction(function () use ($validated, $id) {
        $drink = Drink::findOrFail($id);
        $drink->update($validated);

        $menuItem = $drink->menuItem;
        if ($menuItem) {
            $menuItem->update([
                'category_ua' => $validated['category_ua'],
                'category_en' => $validated['category_en'],
                'title_ua' => $validated['title_ua'],
                'title_en' => $validated['title_en'],
                'description_ua' => $validated['description_ua'],
                'description_en' => $validated['description_en'],
                'id_category' => $validated['id_category'],
                'spec_offer' => $validated['spec_offer'] ?? 0,
            ]);

            // Оновлюємо або пересоздаємо варіанти
            $menuItem->variants()->delete();

            MenuItemVariant::create([
                'menu_item_id' => $menuItem->id,
                'output' => $validated['output_1'],
                'volume' => $validated['volume'] ?? '',
                'price' => $validated['price_1'],
                'currency' => $validated['currency'],
            ]);

            if (!empty($validated['output_2']) && !empty($validated['price_2'])) {
                MenuItemVariant::create([
                    'menu_item_id' => $menuItem->id,
                    'output' => $validated['output_2'],
                    'volume' => $validated['volume'] ?? '',
                    'price' => $validated['price_2'],
                    'currency' => $validated['currency'],
                ]);
            }
        }
    });

    return redirect()->route('menu-editor.drink.index')->with('success', 'Позицію оновлено!');
}

    public function deleteDrink($id)
{
    DB::transaction(function () use ($id) {
        $drink = Drink::findOrFail($id);
        $menuItem = $drink->menuItem;

        if ($menuItem) {
            $menuItem->variants()->delete();
            $menuItem->delete();
        }

        $drink->delete();
    });

    return redirect()->route('menu-editor.drink.index')->with('success', 'Позицію видалено!');
}

}
