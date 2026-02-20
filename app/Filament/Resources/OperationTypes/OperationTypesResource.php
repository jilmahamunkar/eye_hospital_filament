<?php

namespace App\Filament\Resources\OperationTypes;

use App\Filament\Resources\OperationTypes\Pages\CreateOperationTypes;
use App\Filament\Resources\OperationTypes\Pages\EditOperationTypes;
use App\Filament\Resources\OperationTypes\Pages\ListOperationTypes;
use App\Filament\Resources\OperationTypes\Pages\ViewOperationTypes;
use App\Filament\Resources\OperationTypes\Schemas\OperationTypesForm;
use App\Filament\Resources\OperationTypes\Schemas\OperationTypesInfolist;
use App\Filament\Resources\OperationTypes\Tables\OperationTypesTable;
use App\Models\OperationTypes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OperationTypesResource extends Resource
{
    protected static ?string $model = OperationTypes::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Operation Type module';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'Operation Types';

    public static function form(Schema $schema): Schema
    {
        return OperationTypesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OperationTypesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OperationTypesTable::configure($table);
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
            'index' => ListOperationTypes::route('/'),
            'create' => CreateOperationTypes::route('/create'),
            'view' => ViewOperationTypes::route('/{record}'),
            'edit' => EditOperationTypes::route('/{record}/edit'),
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
