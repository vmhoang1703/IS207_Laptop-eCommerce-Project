<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Header;
use App\View\Components\ProductCard;
use App\View\Components\Footer;
use App\View\Components\FeedbackCard;
use App\View\Components\Filter;
use App\View\Components\NewArrival;
use App\View\Components\Countdown;

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
        Blade::component('product-card', ProductCard::class);
        Blade::component('header', Header::class);
        Blade::component('footer', Footer::class);
        Blade::component('feedback-card', FeedbackCard::class);
        Blade::component('filter', Filter::class);
        Blade::component('newarrival', NewArrival::class);
        Blade::component('countdown', Countdown::class);
    }
}
