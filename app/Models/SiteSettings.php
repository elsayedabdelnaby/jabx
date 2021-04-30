<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    protected $append = ['logo_path', 'favicon_path'];

    public function getLogoPathAttribute(){
        return 'uploads/images/site_settings/'.$this->logo;
    }

    public function getFaviconPathAttribute(){
        return 'uploads/images/site_settings/'.$this->favicon;
    }
}
