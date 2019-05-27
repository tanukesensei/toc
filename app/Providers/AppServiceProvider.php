<?php

namespace toc\Providers;

use Illuminate\Support\ServiceProvider;
use toc\Colecao;
use toc\Observers\ColecaoObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Colecao::observe(ColecaoObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
