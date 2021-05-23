<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->get('email');
        $subscriber = Subscriber::where('email', $email)->get();
        if(count($subscriber) > 0){
            return response()->json([
                'success' => 'This Mail Already Subscribed',
                'msg' => 'This mail already subscribed'
            ]);
        }
        $subscriber = new Subscriber();
        $subscriber->email = $email;
        $subscriber->save();

        return response()->json([
            'success' => 'Ajax request submitted successfully',
            'data' => $subscriber->id,
            'msg' => 'Thank you for your subscribtion'
        ]);
    }
}
