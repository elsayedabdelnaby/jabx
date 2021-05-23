<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request){
        return response()->json(['success'=>'Ajax request submitted successfully', 'data' => $request->get('email')]);
    }
}
