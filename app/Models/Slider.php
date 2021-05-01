<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $append = ['image_path'];

    public function getImagePathAttribute()
    {
        return 'uploads/images/sliders/' . $this->image;
    }

    public function getIsActiveAttribute($value)
    {
        return $value == 1 ? 1 : 2;
    }
}
