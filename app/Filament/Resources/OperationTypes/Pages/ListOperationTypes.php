<?php

namespace App\Filament\Resources\OperationTypes\Pages;

use App\Filament\Resources\OperationTypes\OperationTypesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOperationTypes extends ListRecords
{
    protected static string $resource = OperationTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
