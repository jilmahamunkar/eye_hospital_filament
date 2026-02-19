<?php

namespace App\Filament\Resources\OperationTypes\Pages;

use App\Filament\Resources\OperationTypes\OperationTypesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOperationTypes extends CreateRecord
{
    protected static string $resource = OperationTypesResource::class;
}
