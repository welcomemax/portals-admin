<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portal extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'version',
        'link',
        'product_id',
        'platform_id',
        'status',
        'status_text',
        'status_images',
        'portal'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'portal' => 'boolean'
    ];

    public function platform() {
        return $this->belongsTo('App\Platform');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }

    public function status() {
        return $this->belongsTo('App\Tag');
    }
}
