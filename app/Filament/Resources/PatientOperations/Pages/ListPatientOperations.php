<?php

namespace App\Filament\Resources\PatientOperations\Pages;

use App\Filament\Resources\PatientOperations\PatientOperationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPatientOperations extends ListRecords
{
    protected static string $resource = PatientOperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
