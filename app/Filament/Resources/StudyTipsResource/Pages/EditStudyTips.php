<?php

namespace App\Filament\Resources\StudyTipsResource\Pages;

use App\Filament\Resources\StudyTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudyTips extends EditRecord
{
    protected static string $resource = StudyTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
