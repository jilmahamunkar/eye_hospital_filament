<?php

namespace App\Filament\Resources\PatientCases\Schemas;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientCaseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('patient_name')
                    ->label('Patient Name')
                    ->required()
                    ->maxLength(255),
                Radio::make('gender')
                    ->label('Gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ])
                    ->default('Male')
                    ->inline()
                    ->required(),
                TextInput::make('age')
                    ->label('Age')
                    ->required()
                    ->integer() // backend validation
                    ->minValue(1)
                    ->maxValue(120)
                    ->extraInputAttributes([
                        'inputmode' => 'numeric',
                        'pattern' => '[0-9]*',
                        'oninput' => "this.value = this.value.replace(/[^0-9]/g, '')",
                    ]),
                TextInput::make('mobile_no')
                    ->label('Mobile No')
                    ->tel()
                    ->extraInputAttributes([
                        'inputmode' => 'numeric',
                        'pattern' => '[0-9]*',
                        'oninput' => "this.value = this.value.replace(/[^0-9]/g, '')",
                    ])
                    ->maxLength(14),
                TextInput::make('address')
                    ->label('Address')
                    ->required()
                    ->maxLength(255),
                TextInput::make('taluka')
                    ->label('Taluka')
                    ->required()
                    ->maxLength(255),
                TextInput::make('district')
                    ->label('District')
                    ->required()
                    ->maxLength(255),
                TextArea::make('remark')
                    ->label('Remark'),
            ]);
    }
}
