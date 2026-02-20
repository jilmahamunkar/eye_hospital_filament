<?php

namespace App\Filament\Resources\Surgeons\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SurgeonsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
