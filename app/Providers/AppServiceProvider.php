<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductsTypeModel;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        // tao view share ra view header
        view()->composer('pages.header', function($view){
            $product_type = ProductsTypeModel::all();
            $view->with('product_type', $product_type);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
