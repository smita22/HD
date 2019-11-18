<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\sub_sub_product;
use App\Models\sub_product;
use DB;

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
            $data['prd'] =  Product::with('subproducts','subtosubproducts')->get()->toArray(); 
            $view->with('prd',  $data);            
        });
    }
}
