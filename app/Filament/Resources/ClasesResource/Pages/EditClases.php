<?php

namespace App\Filament\Resources\ClasesResource\Pages;

use App\Filament\Resources\ClasesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClases extends EditRecord
{
    protected static string $resource = ClasesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
