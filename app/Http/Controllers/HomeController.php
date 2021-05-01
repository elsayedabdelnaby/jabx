<?php

namespace App\Http\Controllers;

use App\Repositories\SponsorRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $sponsorRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SponsorRepositoryInterface $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sponsors = $this->sponsorRepository->all();
        
        return view('home', [
            'sponsors' => $sponsors
        ]);
    }
}
