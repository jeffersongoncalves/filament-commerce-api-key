<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ApiKeyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('token'),
                        TextInput::make('redacted'),
                        TextInput::make('type'),
                    ])->columns(2),
            ]);
    }
}
