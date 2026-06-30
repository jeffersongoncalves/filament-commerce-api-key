<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\ApiKey\Models\ApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\CommerceApiKeyPlugin;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages\CreateApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages\EditApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Pages\ListApiKey;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Schemas\ApiKeyForm;
use JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Tables\ApiKeyTable;

class ApiKeyResource extends Resource
{
    protected static ?string $model = ApiKey::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceApiKeyPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-api-key.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return ApiKeyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApiKeyTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListApiKey::route('/'),
            'create' => CreateApiKey::route('/create'),
            'edit' => EditApiKey::route('/{record}/edit'),
        ];
    }
}
