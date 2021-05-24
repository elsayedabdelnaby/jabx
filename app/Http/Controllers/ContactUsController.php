<?php

namespace App\Http\Controllers;

use App\Models\ContactUsMessage;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function open()
    {
        return view('front.contact_us');
    }

    public function store(Request $request)
    {
        try {
            $contact_us_msg = new ContactUsMessage();
            $contact_us_msg->contact_name = $request->get('contact_name');
            $contact_us_msg->contact_email = $request->get('contact_email');
            $contact_us_msg->contact_message = $request->get('contact_message');
            $contact_us_msg->save();
            return response()->json(['msg' => 'Message send successfully', 'status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
}
