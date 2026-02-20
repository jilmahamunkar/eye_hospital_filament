<?php

namespace App\Filament\Resources\PatientCases\Pages;

use App\Filament\Resources\PatientCases\PatientCaseResource;
use App\Models\GeneralSettings;
use Filament\Resources\Pages\CreateRecord;

class CreatePatientCase extends CreateRecord
{
    protected static string $resource = PatientCaseResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['case_fees'] = GeneralSettings::where('key', 'case_fees')->first()->value;

        return $data;
    }
}
