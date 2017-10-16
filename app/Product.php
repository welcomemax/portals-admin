<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'alias',
        'name',
        'description',
        'icon'
    ];

    protected $hidden = [
        'update_url'
    ];
}
