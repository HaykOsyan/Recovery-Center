<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyItem extends Model
{
    use HasFactory;
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    protected $fillable = [
        'name_am',
        'name_en',
        'prop_id'
    ];

}

