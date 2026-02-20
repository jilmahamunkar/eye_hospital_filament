<?php

namespace App\Filament\Resources\PatientOperations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PatientOperationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('Operation ID')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('patient.patient_name')
                    ->label('Patient Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('operation_date')
                    ->label('Operation Date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('eye')
                    ->label('Eye')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('operationType.name')
                    ->label('Operation Type')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('operation_fees')
                    ->label('Operation Fees')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('welfare_fund')
                    ->label('Welfare Fund')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('total_fees')
                    ->label('Total Fees')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('operation_details')
                    ->label('Operation Details')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('surgeon.name')
                    ->label('Surgeon')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
