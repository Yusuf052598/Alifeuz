<?php

namespace App\Providers;

use App\Ad;
use App\Categories;
use App\News;
use App\Sliders;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        Schema::defaultStringLength(191);
      $categories=Categories::all();
       return View::share(compact('categories'));
    }
}
