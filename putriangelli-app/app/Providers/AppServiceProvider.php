<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

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
        //untuk mengelola product hanya dilakukan oleh admin
        Gate::define('manage-products', function ($user) {
            return $user->role == 'admin';
        });
        //untuk update product dapat dilakukan oleh admin dan sales
        Gate::define('update-product', function (User $user){
            return $user->role == 'admin' || $user->role == 'sales';
        });
        //untuk menghapus product hanya dilakukan oleh admin
        Gate::define('delete-products', function (User $user){
            return $user->role == 'admin';
        });
        //untuk membuat product dapat dilakukan oleh user yang sudah login 
        Gate::define('create-products', function (User $user){
            return $user !== null;
        });
    }
}
