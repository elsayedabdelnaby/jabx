<?php

namespace App\Http\Middleware;

use App\Models\ContactUsData;
use App\Models\Product;
use App\Models\SiteSettings;
use App\Repositories\Eloquent\ProductRepository;
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
        $product = new Product();
        $productRepository = new ProductRepository($product);
        $site_settings = SiteSettings::firstOrFail();
        $contact_us_data = ContactUsData::firstOrFail();
        $headers_products = $productRepository->getThreeHeadersProducts();

        View::share('site_settings', $site_settings);
        View::share('contact_us_data', $contact_us_data);
        View::share('headers_products', $headers_products);

        return $next($request);
    }
}
