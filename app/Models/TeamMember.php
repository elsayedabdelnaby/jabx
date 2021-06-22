<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;

    protected $append = ['image_path'];

    public function getImagePathAttribute()
    {
        return 'uploads/images/team_members/' . $this->image;
    }
}
