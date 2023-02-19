<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cat;
use App\Models\Setting;
class viewSeriveceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer("front.inc.header", function ($view) {
            $view->with("cats", Cat::select("id", "name")->get());
            $view->with("sett", Setting::select("logo", "favicon")->first());

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
