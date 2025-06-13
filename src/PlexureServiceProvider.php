<?php

declare(strict_types=1);

namespace PurwantoId\Plexure;

use Purwantoid\LaravelPackage\Package;
use Purwantoid\LaravelPackage\PackageServiceProvider;
use PurwantoId\Plexure\Commands\PlexureCommand;

class PlexureServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/purwantoid/laravel-package
         */
        $package
            ->name('plexure')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_plexure_table')
            ->hasCommand(PlexureCommand::class);
    }
}
