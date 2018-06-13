<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'price',
        'visible'
    ];
}
