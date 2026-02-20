<?php

namespace App\Filament\Resources\PatientOperations\Schemas;

use App\Models\OperationTypes;
use App\Models\PatientCase;
use App\Models\Surgeons;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientOperationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('patient_id')
                    ->label('Patient Name')
                    ->options(PatientCase::all()->pluck('patient_name', 'id'))
                    ->searchable()
                    ->required(),
                DatePicker::make('operation_date')
                    ->label('Operation Date')
                    ->required(),
                Select::make('eye')
                    ->label('Eye')
                    ->options([
                        'Right' => 'Right',
                        'Left' => 'Left',
                        'Both' => 'Both',
                    ])
                    ->required(),
                Select::make('operation_type_id')
                    ->label('Operation Type')
                    ->options(OperationTypes::all()->pluck('type_en', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('operation_fees')
                    ->label('Operation Fees')
                    ->numeric()
                    ->required(),
                TextInput::make('welfare_fund')
                    ->label('Welfare Fund')
                    ->numeric()
                    ->required(),
                TextInput::make('total_fees')
                    ->label('Total Fees')
                    ->numeric()
                    ->required(),
                TextInput::make('operation_details')
                    ->label('Operation Details')
                    ->required(),
                Select::make('surgeon_id')
                    ->label('Surgeon')
                    ->options(Surgeons::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Pending' => 'Pending',
                        'Completed' => 'Completed',
                        'Cancelled' => 'Cancelled',
                    ])
                    ->required(),
            ]);
    }
}
