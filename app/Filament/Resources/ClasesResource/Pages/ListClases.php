<?php

namespace App\Filament\Resources\ClasesResource\Pages;

use App\Filament\Resources\ClasesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClases extends ListRecords
{
    protected static string $resource = ClasesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
