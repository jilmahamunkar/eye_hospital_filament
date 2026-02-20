<?php

namespace App\Filament\Resources\PatientCases\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PatientCasesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('Case ID')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('patient_name')
                    ->label('Patient Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('gender')
                    ->label('Gender')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('age')
                    ->label('Age')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mobile_no')
                    ->label('Mobile No')
                    ->searchable(),
                TextColumn::make('address')
                    ->label('Address')
                    ->searchable(),
                TextColumn::make('taluka')
                    ->label('Taluka')
                    ->searchable(),
                TextColumn::make('district')
                    ->label('District')
                    ->searchable(),
                TextColumn::make('case_fees')
                    ->label('Case Fees')
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
