<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Utils\Util;

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
        $menu = Util::getListCategory();
        $phone = Util::getContact();
        View::share('menu', $menu);
        View::share('url_contact', '/lien-he');
        View::share('phone_contact', $phone);
    }
}
