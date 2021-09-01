<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function propertyItem()
    {
        return $this->HasMany(PropertyItem::class);
    }

    protected $fillable = [
        'name_am',
        'name_en',
        'price',
        'quantity',
        'bestseller',
        'cat-id'
    ];
}
