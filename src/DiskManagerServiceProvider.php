<?php

namespace Athulya\DiskManager;

use Athulya\DiskManager\Commands\DiskManagerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiskManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('disk-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_disk-manager_table')
            ->hasCommand(DiskManagerCommand::class);
    }
}
