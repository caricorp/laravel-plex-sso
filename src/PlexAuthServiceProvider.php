<?php

namespace Cari\PlexAuth;

class PlexAuthServiceProvider extends PackageServiceProvider
{

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/plex-auth.php' => config_path('plex-auth.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/plex-auth.php', 'plex-auth'
        );
    }

}
