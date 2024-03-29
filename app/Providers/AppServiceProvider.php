<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;

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
        /*to share data between 2 views*/
        view()->composer('header', function($view){
            $product_type = ProductType::all();
            $view->with('product_type', $product_type);
        });
    }
}
