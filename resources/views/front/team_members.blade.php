@extends('layouts.front.app')

@section('meta')
    @include('front.partials.meta', [
    'title' => $site_settings->meta_title,
    'keywords' => $site_settings->meta_keywords,
    'description' => $site_settings->meta_description,
    'image' => $site_settings->getLogoPathAttribute()
    ])
@endsection

@section('content')
@endsection

<div class="section over-hide padding-top-120 padding-top-mob-nav section-background-20">	
    <div class="section-1400 pt-xl-4">
        <div class="container-fluid padding-top-bottom-80">
            <div class="row">
                <div class="col-lg">
                    <h2 class="display-8 mb-3">
                        Team Members
                    </h2>
                    <p class="lead mb-0 title-text-left-line-small">
                        List of people who matter
                    </p>
                </div>
                <div class="col-lg-auto align-self-center mt-4 mt-lg-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb no-border">
                            <li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Home">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="link link-dark-primary size-14" data-hover="Pages">Pages</a></li>
                            <li class="breadcrumb-item active font-weight-500" aria-current="page"><span class="size-14">Team</span></li>
                        </ol>
                    </nav>				
                </div>
            </div>
        </div>
    </div>
    <div class="section-1400 padding-bottom-120">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach ($team_members as $member)
                <div class="col-sm-10 col-md-8 col-lg-5 img-wrap" data-scroll-reveal="enter left move 40px over 0.5s after 0.3s">
                    <img class="radius-img-anime-1" src="{{ asset($member->getImagePathAttribute()) }}" alt="{{ $member->name }}">
                </div>
                <div class="col-sm-10 col-md-8 col-lg-7 pl-lg-5 align-self-center mt-4 mt-lg-0">
                    <h3 class="mb-1">
                        {{ $member->name }}
                    </h3>
                    <h6 class="mb-4 color-gray font-weight-700">
                        {{ $member->title }}
                    </h6>
                    <div class="row justify-content-start">
                        <div class="col-xl-8">
                            <p class="lead mb-4">
                                {{ $member->brief }}
                            </p>
                        </div>
                        <div class="clearfix w-100"></div>
                        {{-- <div class="col-auto">
                            <div class="h5 mb-1"><span class="counter">70</span>+</div>
                            <h6 class="mb-0 color-gray">
                                Projects
                            </h6>
                        </div>
                        <div class="col-auto">
                            <div class="h5 mb-1"><span class="counter">3</span>m</div>
                            <h6 class="mb-0 color-gray">
                                Users
                            </h6>
                        </div>
                        <div class="col-auto">
                            <div class="h5 mb-1"><span class="counter">12</span></div>
                            <h6 class="mb-0 color-gray">
                                Awards
                            </h6>
                        </div> --}}
                        <div class="col-12 mt-4">
                            @if (!empty($member->instagram_link))
                                <a href="{{ $member->instagram_link }}" class="link link-primary mr-2" data-hover="Instagram">Instagram</a> 
                            @endif
                            @if (!empty($member->twitter_link))
                                <a href="{{ $member->twitter_link }}" class="link link-primary mr-2" data-hover="Twitter">Twitter</a>
                            @endif
                            @if (!empty($member->linkedin_link))
                                <a href="{{ $member->linkedin_link }}" class="link link-primary mr-2" data-hover="LinkedIn">LinkedIn</a>
                            @endif
                            @if (!empty($member->facebook_link))
                                <a href="{{ $member->facebook_link }}" class="link link-primary mr-2" data-hover="Facebook">Facebook</a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
    
@endpush