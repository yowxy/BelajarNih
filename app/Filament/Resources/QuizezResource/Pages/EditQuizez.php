<?php

namespace App\Filament\Resources\QuizezResource\Pages;

use App\Filament\Resources\QuizezResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuizez extends EditRecord
{
    protected static string $resource = QuizezResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
