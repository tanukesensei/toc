<?php

namespace toc\Providers;

use Illuminate\Support\ServiceProvider;
use toc\Colecao;
use toc\Observers\ColecaoObserver;
use Illuminate\Support\Facades\View;
use toc\Http\ViewComposers\HeaderComposer;

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

        View::composer('*', HeaderComposer::class);
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
