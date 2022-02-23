<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'author',
        'genre',
        'price',
        'description',
        'photo',
        'created-at',
        'updated-at',
    ];
}
