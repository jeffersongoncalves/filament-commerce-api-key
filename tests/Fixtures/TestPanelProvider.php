<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\ApiKey\CommerceApiKeyPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceApiKeyPlugin::make(),
            ]);
    }
}
