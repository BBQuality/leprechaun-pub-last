<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItemVariant extends Model
{
    use HasFactory;

    protected $table = 'menu_item_variants';

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class, foreignKey: 'menu_item_id');
    }
}
