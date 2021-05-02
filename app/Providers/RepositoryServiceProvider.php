<?php

namespace App\Providers;

use App\Repositories\AdminUserRepositoryInterface;
use App\Repositories\Eloquent\AdminUserRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\ProductRepository;
use App\Repositories\Eloquent\SliderRepository;
use App\Repositories\Eloquent\SponsorRepository;
use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\SliderRepositoryInterface;
use App\Repositories\SponsorRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(AdminUserRepositoryInterface::class, AdminUserRepository::class);
        $this->app->bind(SponsorRepositoryInterface::class, SponsorRepository::class);
        $this->app->bind(SliderRepositoryInterface::class, SliderRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
}
