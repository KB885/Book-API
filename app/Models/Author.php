<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'death_date',
        'genres',
        'influences',
        'about',
    ];

    protected $casts = [
        'genres' => 'array',
        'influences' => 'array',
    ];
}
