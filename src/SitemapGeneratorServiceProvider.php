<?php

namespace JoshTaylor\SimpleSitemapGenerator;

use Illuminate\Support\ServiceProvider;

class SitemapGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }
    }
}
