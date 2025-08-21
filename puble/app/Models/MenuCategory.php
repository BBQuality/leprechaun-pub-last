<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'title_ua',
        'title_en',
        'type',
        'parent_id',
        'sort_order',
    ];
    // Батьківська категорія
    public function parent()
    {
        return $this->belongsTo(MenuCategory::class, 'parent_id');
    }
    // Дочірні категорії
    public function children()
    {
        return $this->hasMany(MenuCategory::class, 'parent_id')->orderBy('sort_order');
    }
    // Scope для типу категорії
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
    public function items()
    {
        return $this->hasMany(MenuItem::class, 'category_id'); // category_id — поле в таблиці menu_items
    }
    // Вивід назви залежно від мови
    public function getTitleAttribute()
    {
        $locale = app()->getLocale(); // визначаємо поточну локаль
        return $locale === 'uk' ? $this->title_ua : $this->title_en;
    }
}
