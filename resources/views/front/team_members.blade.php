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



@push('custom-scripts')
    
@endpush