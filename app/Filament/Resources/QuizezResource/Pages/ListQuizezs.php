<?php

namespace App\Filament\Resources\QuizezResource\Pages;

use App\Filament\Resources\QuizezResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuizezs extends ListRecords
{
    protected static string $resource = QuizezResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
