<?php

namespace App\Filament\Resources\OperationTypes\Pages;

use App\Filament\Resources\OperationTypes\OperationTypesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOperationTypes extends ViewRecord
{
    protected static string $resource = OperationTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
