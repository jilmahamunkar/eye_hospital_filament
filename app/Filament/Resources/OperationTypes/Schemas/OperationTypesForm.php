<?php

namespace App\Filament\Resources\OperationTypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class OperationTypesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type_en')
                    ->label('Type (English)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('type_gu')
                    ->label('Type (Gujarati)')
                    ->required()
                    ->maxLength(255),
                TextInput::make('price')
                    ->label('Price')
                    ->required()
                    ->numeric(),
                Toggle::make('is_active')
                    ->label('Status')
                    ->required(),
            ]);
    }
}
