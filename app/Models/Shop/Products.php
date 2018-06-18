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
        'visible',
        'link_1',
        'link_2',
        'link_3',
        'link_1_display',
        'link_2_display',
        'link_3_display'

    ];
}
