<?php

namespace App\Filament\Resources\PatientOperations\Pages;

use App\Filament\Resources\PatientOperations\PatientOperationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPatientOperation extends ViewRecord
{
    protected static string $resource = PatientOperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
