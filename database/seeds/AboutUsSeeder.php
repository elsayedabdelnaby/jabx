<?php

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutus = new AboutUs();
        $aboutus->ourmission = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium.';
        $aboutus->why_choose_us = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium.';
        $aboutus->what_we_do = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium.';
        $aboutus->main_section_title = 'Huge collection of pre-built section templates.';
        $aboutus->main_section_description = 'We provide digital experience services to startups and small businesses to looking for a partner of their digital media.';
        $aboutus->projects_number = 90;
        $aboutus->users_number = 120;
        $aboutus->awards_number = 17;
        $aboutus->main_section_image = 'about-2.jpg';
        $aboutus->meta_title = 'Jabx';
        $aboutus->meta_keywords = 'Jabx';
        $aboutus->meta_description = 'Jabx';
        $aboutus->banner = 'aboutus.jpg';
        $aboutus->save();
    }
}
