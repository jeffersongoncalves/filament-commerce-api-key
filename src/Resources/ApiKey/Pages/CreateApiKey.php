<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\ApiKeyResource;

class CreateApiKey extends CreateRecord
{
    protected static string $resource = ApiKeyResource::class;
}
