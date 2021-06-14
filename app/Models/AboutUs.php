<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = 'aboutus';

    public function getMainSectionImagePathAttribute(){
        return 'uploads/images/aboutus/'.$this->main_section_image;
    }

    public function getBannerPathAttribute(){
        return 'uploads/images/aboutus/'.$this->banner;
    }
}
