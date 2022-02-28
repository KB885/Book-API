<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'title',
        'author',
        'num_pages',
        'language',
        'publish_date',
        'genres',
    ];

    protected $casts = [
        'genres' => 'array',
    ];
}
