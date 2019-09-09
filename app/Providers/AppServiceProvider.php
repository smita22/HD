<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Product;
use App\sub_sub_product;


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
        view()->composer('layouts.app', function($view)
        {
            $product = sub_product::all();
           
            $view->with('product',  $product);
        });
    }
}
