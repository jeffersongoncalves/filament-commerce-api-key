<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\ApiKeyResource;

class EditApiKey extends EditRecord
{
    protected static string $resource = ApiKeyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
