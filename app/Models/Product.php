<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $append = ['image_path'];

    public function getImagePathAttribute()
    {
        return 'uploads/images/sliders/' . $this->image;
    }

    public function getIsPublishAttribute($value)
    {
        return $value == 1 ? 1 : 2;
    }

    public function getDisplayInHeaderAttribute($value)
    {
        return $value == 1 ? 'yes' : 'no';   
    }
}
