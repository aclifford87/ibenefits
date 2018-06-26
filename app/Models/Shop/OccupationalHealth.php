<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

class OccupationalHealth extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        'product_info',
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