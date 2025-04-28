<?php

namespace Designbycode\LaravelMint;

use Designbycode\LaravelMint\Commands\LaravelMintCommand;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMintServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {

        Blade::componentNamespace('Designbycode\\LaravelMint\\View\\Components', 'mint');
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mint')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelMintCommand::class);
    }
}
