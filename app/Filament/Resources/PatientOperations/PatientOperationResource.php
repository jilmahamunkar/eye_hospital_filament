<?php

namespace App\Filament\Resources\PatientOperations;

use App\Filament\Resources\PatientOperations\Pages\CreatePatientOperation;
use App\Filament\Resources\PatientOperations\Pages\EditPatientOperation;
use App\Filament\Resources\PatientOperations\Pages\ListPatientOperations;
use App\Filament\Resources\PatientOperations\Pages\ViewPatientOperation;
use App\Filament\Resources\PatientOperations\Schemas\PatientOperationForm;
use App\Filament\Resources\PatientOperations\Schemas\PatientOperationInfolist;
use App\Filament\Resources\PatientOperations\Tables\PatientOperationsTable;
use App\Models\PatientOperation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientOperationResource extends Resource
{
    protected static ?string $model = PatientOperation::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Reports';

    protected static ?string $navigationLabel = 'Operation Listing';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'Operation';

    public static function form(Schema $schema): Schema
    {
        return PatientOperationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PatientOperationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PatientOperationsTable::configure($table);
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
            'index' => ListPatientOperations::route('/'),
            'create' => CreatePatientOperation::route('/create'),
            'view' => ViewPatientOperation::route('/{record}'),
            'edit' => EditPatientOperation::route('/{record}/edit'),
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
