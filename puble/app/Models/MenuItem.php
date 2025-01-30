<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menu_items';

    public function variants()
    {
        return $this->hasMany(MenuItemVariant::class, 'menu_item_id');
    }
}
