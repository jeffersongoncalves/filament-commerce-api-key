<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Concerns\HasCommerceApiKeyPluginConfig;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\ApiKeyResource;

class CommerceApiKeyPlugin implements Plugin
{
    use HasCommerceApiKeyPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-api-key';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'api-key' => ApiKeyResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
