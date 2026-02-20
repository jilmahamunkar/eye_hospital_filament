<?php

namespace App\Filament\Resources\Surgeons;

use App\Filament\Resources\Surgeons\Pages\CreateSurgeons;
use App\Filament\Resources\Surgeons\Pages\EditSurgeons;
use App\Filament\Resources\Surgeons\Pages\ListSurgeons;
use App\Filament\Resources\Surgeons\Pages\ViewSurgeons;
use App\Filament\Resources\Surgeons\Schemas\SurgeonsForm;
use App\Filament\Resources\Surgeons\Schemas\SurgeonsInfolist;
use App\Filament\Resources\Surgeons\Tables\SurgeonsTable;
use App\Models\Surgeons;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SurgeonsResource extends Resource
{
    protected static ?string $model = Surgeons::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Surgeon Module';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'Surgeons';

    public static function form(Schema $schema): Schema
    {
        return SurgeonsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SurgeonsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SurgeonsTable::configure($table);
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
            'index' => ListSurgeons::route('/'),
            'create' => CreateSurgeons::route('/create'),
            'view' => ViewSurgeons::route('/{record}'),
            'edit' => EditSurgeons::route('/{record}/edit'),
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
