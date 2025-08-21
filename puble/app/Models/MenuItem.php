<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuItem extends Model
{
    protected $fillable = [
        'category_id',
        'title_ua',
        'title_en',
        'description_ua',
        'description_en',
        'is_active',
        'sort_order'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'category_id');
    }

    public function variants(): HasMany
    {
        return $this->hasMany(MenuItemVariant::class, 'menu_item_id');
    }

    // Автоматично видаляє всі варіанти при видаленні позиції
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($item) {
            $item->variants()->delete();
        });
    }
}
