<?php

namespace App\Filament\Resources\DiscussAnswerResource\Pages;

use App\Filament\Resources\DiscussAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiscussAnswers extends ListRecords
{
    protected static string $resource = DiscussAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
