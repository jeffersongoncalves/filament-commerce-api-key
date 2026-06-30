<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceApiKeyServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-api-key';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
