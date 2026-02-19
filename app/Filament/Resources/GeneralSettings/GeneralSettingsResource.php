<?php

namespace App\Filament\Resources\GeneralSettings;

use App\Filament\Resources\GeneralSettings\Pages\CreateGeneralSettings;
use App\Filament\Resources\GeneralSettings\Pages\EditGeneralSettings;
use App\Filament\Resources\GeneralSettings\Pages\ListGeneralSettings;
use App\Filament\Resources\GeneralSettings\Pages\ViewGeneralSettings;
use App\Filament\Resources\GeneralSettings\Schemas\GeneralSettingsForm;
use App\Filament\Resources\GeneralSettings\Schemas\GeneralSettingsInfolist;
use App\Filament\Resources\GeneralSettings\Tables\GeneralSettingsTable;
use App\Models\GeneralSettings;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GeneralSettingsResource extends Resource
{
    protected static ?string $model = GeneralSettings::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'General Settings';

    public static function form(Schema $schema): Schema
    {
        return GeneralSettingsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GeneralSettingsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GeneralSettingsTable::configure($table);
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
            'index' => ListGeneralSettings::route('/'),
            'create' => CreateGeneralSettings::route('/create'),
            'view' => ViewGeneralSettings::route('/{record}'),
            'edit' => EditGeneralSettings::route('/{record}/edit'),
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
