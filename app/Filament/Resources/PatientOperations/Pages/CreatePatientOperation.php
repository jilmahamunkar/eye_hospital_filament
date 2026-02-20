<?php

namespace App\Filament\Resources\PatientOperations\Pages;

use App\Filament\Resources\PatientOperations\PatientOperationResource;
use App\Models\GeneralSettings;
use App\Models\OperationType;
use Filament\Resources\Pages\CreateRecord;

class CreatePatientOperation extends CreateRecord
{
    protected static string $resource = PatientOperationResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['operation_fees'] = $data['operation_type_id'] ? OperationType::find($data['operation_type_id'])->price : 0;
        $data['welfare_fund'] = GeneralSettings::where('key', 'welfare_fund')->first()->value;
        $data['total_fees'] = $data['operation_fees'] + $data['welfare_fund'];

        return $data;
    }
}
