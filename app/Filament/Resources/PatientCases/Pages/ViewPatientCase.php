<?php

namespace App\Filament\Resources\PatientCases\Pages;

use App\Filament\Resources\PatientCases\PatientCaseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPatientCase extends ViewRecord
{
    protected static string $resource = PatientCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
