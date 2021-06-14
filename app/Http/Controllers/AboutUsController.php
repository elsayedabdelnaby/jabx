<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $aboutus = AboutUs::firstOrFail();
        $sponsors = Sponsor::all();
        return view('front.aboutus', compact('aboutus', 'sponsors'));
    }
}
