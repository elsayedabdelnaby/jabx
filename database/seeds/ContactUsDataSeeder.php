<?php

use App\Models\ContactUsData;
use Illuminate\Database\Seeder;

class ContactUsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactus_data = new ContactUsData();
        $contactus_data->address_title = '281 1st Avenue, New York';
        $contactus_data->working_times = 'Mon - Sat, 8AM to 6PM';
        $contactus_daFta->phone_1 = '281 1st Avenue, New York';
        $contactus_data->phone_2 = '281 1st Avenue, New York';
        $contactus_data->email = '281 1st Avenue, New York';
        $contactus_data->facebook_link = 'www.facebook.com';
        $contactus_data->instagram_link = 'www.instagram.com';
        $contactus_data->twitter_link = 'www.twitter.com';
        $contactus_data->linkedin_link = 'www.linkedin.com';
        $contactus_data->save();
    }
}
