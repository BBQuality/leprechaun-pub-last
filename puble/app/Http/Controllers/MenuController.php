<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuCategory::with(['items.variants'])->get();
        $groupedMenu = $categories->groupBy('type');

        // JSON читаємо зі storage/app/slides.json
        $slides = [];
        $slidesPath = storage_path('app/slides.json');
        if (File::exists($slidesPath)) {
            $decoded = json_decode(File::get($slidesPath), true);
            if (is_array($decoded)) {
                // Для кожного слайду підставимо публічний URL до картинки
                foreach ($decoded as &$slide) {
                    if (!empty($slide['image'])) {
                        // image у JSON має бути просто ім'ям файлу, напр. "coffee.gif"
                        $slide['image'] = Storage::url("slides/{$slide['image']}");
                    }
                }
                $slides = $decoded;
            }
        }

        return view('index', compact('groupedMenu', 'slides'));
    }
}
