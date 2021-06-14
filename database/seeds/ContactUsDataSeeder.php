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
        $contactus_data->phone_1 = '+33(0)1 43 65 79 19';
        $contactus_data->phone_2 = '+38(0)6 34 62 54 77';
        $contactus_data->email = 'weroiu@gmail.com';
        $contactus_data->facebook_link = 'www.facebook.com';
        $contactus_data->instagram_link = 'www.instagram.com';
        $contactus_data->twitter_link = 'www.twitter.com';
        $contactus_data->linkedin_link = 'www.linkedin.com';
        $contactus_data->save();
    }
}
