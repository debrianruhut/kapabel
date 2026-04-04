<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Contracts\ExpertRepositoryInterface::class,
            \App\Repositories\Eloquent\ExpertRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\ArticleRepositoryInterface::class,
            \App\Repositories\Eloquent\ArticleRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
