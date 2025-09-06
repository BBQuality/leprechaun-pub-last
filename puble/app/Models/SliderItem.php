<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderItem extends Model
{
    protected $fillable = [
        'title',
        'description',
        'slogan',
        'price',
        'image',
    ];
}
