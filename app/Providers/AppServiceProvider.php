<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $this->app->bind(
            \App\Repositories\Contracts\FaqRepositoryInterface::class,
            \App\Repositories\Eloquent\FaqRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\SettingRepositoryInterface::class,
            \App\Repositories\Eloquent\SettingRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\MessageRepositoryInterface::class,
            \App\Repositories\Eloquent\MessageRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\CategoryRepositoryInterface::class,
            \App\Repositories\Eloquent\CategoryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\TagRepositoryInterface::class,
            \App\Repositories\Eloquent\TagRepository::class
        );
        $this->app->bind(
            \App\Repositories\Contracts\UserRepositoryInterface::class,
            \App\Repositories\Eloquent\UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $settingRepo = app(\App\Repositories\Contracts\SettingRepositoryInterface::class);
            $setting = $settingRepo->getFirstSetting();
            $contactInfo = [];
            if ($setting && is_array($setting->properties)) {
                foreach ($setting->properties as $prop) {
                    if (isset($prop['is_active']) && $prop['is_active']) {
                        $contactInfo[$prop['key']] = $prop['value'];
                    }
                }
            }
            $view->with('contactInfo', $contactInfo);
        });
    }
}
