<?php

namespace App\Filament\Resources\PatientCases\Pages;

use App\Filament\Resources\PatientCases\PatientCaseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPatientCases extends ListRecords
{
    protected static string $resource = PatientCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
