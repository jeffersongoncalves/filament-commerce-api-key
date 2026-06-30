<?php

namespace JeffersonGoncalves\FilamentCommerce\ApiKey\Resources\ApiKey\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class ApiKeyForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
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
