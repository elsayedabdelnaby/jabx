<?php

namespace App\Http\Middleware;

use App\Models\SiteSettings;
use Illuminate\Support\Facades\View;
use Closure;

class FrontEndPages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $site_settings = SiteSettings::firstOrFail();
        View::share('site_settings', $site_settings);
        return $next($request);
    }
}
