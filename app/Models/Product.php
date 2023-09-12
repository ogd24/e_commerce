<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'prix',
        'photo',
        'descripTion',
        'detail',
        'promo',

    ];

    public function roles (){

        return $this->belongsTo(Category::class);
    }

    public function category (){

        return $this->belongsTo(Category::class);
    }
}
