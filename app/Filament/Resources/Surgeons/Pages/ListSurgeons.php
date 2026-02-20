<?php

namespace App\Filament\Resources\Surgeons\Pages;

use App\Filament\Resources\Surgeons\SurgeonsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSurgeons extends ListRecords
{
    protected static string $resource = SurgeonsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
