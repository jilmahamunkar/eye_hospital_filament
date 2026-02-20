<?php

namespace App\Filament\Resources\Surgeons\Pages;

use App\Filament\Resources\Surgeons\SurgeonsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSurgeons extends ViewRecord
{
    protected static string $resource = SurgeonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
