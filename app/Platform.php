<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'icon',
        'link'
    ];
}
