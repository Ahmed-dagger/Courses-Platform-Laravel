<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PaginationPaginator::useBootstrapFive();

        View::composer('*', function ($view) {
            if (auth()->check()) {
                $cartcount = Cart::where('user_id', auth()->user()->id)->count();
                $view->with('cartcount', $cartcount);
            }

            else
            {
                $cartcount = 0;
                $view->with('cartcount', $cartcount);
            }
        });
    }
}
