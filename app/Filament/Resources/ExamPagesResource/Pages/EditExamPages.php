<?php

namespace App\Filament\Resources\ExamPagesResource\Pages;

use App\Filament\Resources\ExamPagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamPages extends EditRecord
{
    protected static string $resource = ExamPagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
