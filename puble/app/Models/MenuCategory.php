<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuCategory extends Model
{
    protected $fillable = [
        'key','parent_id','type','title_ua','title_en','sort_order'
    ];

    public function parent(): BelongsTo {
        return $this->belongsTo(MenuCategory::class, 'parent_id');
    }

    public function children(): HasMany {
        return $this->hasMany(MenuCategory::class, 'parent_id')->orderBy('sort_order');
    }

    public function items(): HasMany {
        return $this->hasMany(MenuItem::class, 'category_id')->orderBy('sort_order');
    }
}
