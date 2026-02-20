<?php

namespace App\Filament\Resources\PatientCases;

use App\Filament\Resources\PatientCases\Pages\CreatePatientCase;
use App\Filament\Resources\PatientCases\Pages\EditPatientCase;
use App\Filament\Resources\PatientCases\Pages\ListPatientCases;
use App\Filament\Resources\PatientCases\Pages\ViewPatientCase;
use App\Filament\Resources\PatientCases\Schemas\PatientCaseForm;
use App\Filament\Resources\PatientCases\Schemas\PatientCaseInfolist;
use App\Filament\Resources\PatientCases\Tables\PatientCasesTable;
use App\Models\PatientCase;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientCaseResource extends Resource
{
    protected static ?string $model = PatientCase::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Patient Case';

    public static function form(Schema $schema): Schema
    {
        return PatientCaseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PatientCaseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PatientCasesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPatientCases::route('/'),
            'create' => CreatePatientCase::route('/create'),
            'view' => ViewPatientCase::route('/{record}'),
            'edit' => EditPatientCase::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
