<?php

namespace App\Filament\Resources\StudyTipsResource\Pages;

use App\Filament\Resources\StudyTipsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudyTips extends ListRecords
{
    protected static string $resource = StudyTipsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
