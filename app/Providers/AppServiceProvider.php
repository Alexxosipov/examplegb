<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Order;
use App\Observers\NewsObserver;
use App\Observers\OrderObserver;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        News::observe(NewsObserver::class);
        Order::observe(OrderObserver::class);
    }
}
