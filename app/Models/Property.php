<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function properties()
    {
        return $this->hasMany(PropertyItem::class);
    }

    protected $fillable = [
        'name_am',
        'name_en',
    ];
}
