<?php

namespace App\Http\Controllers;

use App\Repositories\SliderRepositoryInterface;
use App\Repositories\SponsorRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $sponsorRepository;
    private $sliderRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SponsorRepositoryInterface $sponsorRepository, SliderRepositoryInterface $sliderRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sponsors = $this->sponsorRepository->all();
        $sliders = $this->sliderRepository->all_active_sliders();
        
        return view('home', [
            'sponsors' => $sponsors,
            'sliders' => $sliders
        ]);
    }
}
