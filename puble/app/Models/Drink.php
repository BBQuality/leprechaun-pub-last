<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Drink extends Model
{
    protected $table = 'drink';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_category',
        'title_ua',
        'title_en',
        'description_ua',
        'description_en',
        'output_1',
        'price_1',
        'output_2',
        'price_2',
        'volume',
        'currency',
        'category_ua',
        'category_en',
        'spec_offer',
    ];

    public function menuItem(): BelongsTo
{
    return $this->belongsTo(MenuItem::class);
}
    
}
