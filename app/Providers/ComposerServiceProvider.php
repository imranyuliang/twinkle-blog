<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Blog;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        View::composer('layouts.side-bar', function ($view) {
            $view->with('categories', Category::all());
        });
    }




    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer('layouts.side-bar', function ($view) {
            $view->with('blogs', Blog::latest()->get());
        });
            
    }
}
