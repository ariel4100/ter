<?php

namespace App\Providers;

use App\Content;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(196);
        Blade::component('components.title', 'title');
        Blade::component('components.gallery', 'gallery');
        Blade::component('components.card', 'card');

        $logos = Content::where('section','logos')->first();
        $contacto = Content::where('section','contacto')->first();
        //dd($logos->image['imagenes']);
        $logos = $logos->image['imagenes'];
        //dd($logos[0]['image']);
        View::share('logos', $logos);
        View::share('contacto', $contacto);
    }
}
