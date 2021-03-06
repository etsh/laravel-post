<?php

namespace Etsh\Post\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Provide routes
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        // Publish databse migrations
        $this->publishes([
            __DIR__.'/../Migrations/' => database_path('migrations')
        ], 'migrations');

        // Link views
        $this->loadViewsFrom(__DIR__.'/../Views', 'Post');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('\Etsh\Post\Repositories\PostRepositoryInterface', function ($app) {
            return new \Etsh\Post\Repositories\EloquentPostRepository;
        });
    }
}
