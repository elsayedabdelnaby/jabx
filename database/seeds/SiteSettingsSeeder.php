<?php

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $site_settings = new SiteSettings();
        $site_settings->title = 'jabx';
        $site_settings->logo = 'logo.png';
        $site_settings->favicon = 'favicon.png';
        $site_settings->meta_title = 'Jabx';
        $site_settings->meta_keywords = 'Jabx';
        $site_settings->meta_description = 'Jabx';
        $site_settings->save();
    }
}
