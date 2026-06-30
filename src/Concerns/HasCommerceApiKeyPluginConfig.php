<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceApiKeyPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-api-key';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Configuration';
    }
}
