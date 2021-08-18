<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_am',
        'title_en',
        'address_am',
        'address_en',
        'description_am',
        'description_en',
        'video'
    ];
}
