<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
    use SoftDeletes;

    protected $append = ['logo_path'];

    public function getLogoPathAttribute(){
        return 'uploads/images/sponsors'.$this->logo;
    }
}
