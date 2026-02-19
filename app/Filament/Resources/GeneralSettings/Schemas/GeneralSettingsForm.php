<?php

namespace App\Filament\Resources\GeneralSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GeneralSettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->maxLength(255),
                TextInput::make('value')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
