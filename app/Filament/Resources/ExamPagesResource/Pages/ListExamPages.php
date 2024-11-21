<?php

namespace App\Filament\Resources\ExamPagesResource\Pages;

use App\Filament\Resources\ExamPagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamPages extends ListRecords
{
    protected static string $resource = ExamPagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
