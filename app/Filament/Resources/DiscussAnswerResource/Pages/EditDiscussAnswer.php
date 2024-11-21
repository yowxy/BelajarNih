<?php

namespace App\Filament\Resources\DiscussAnswerResource\Pages;

use App\Filament\Resources\DiscussAnswerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscussAnswer extends EditRecord
{
    protected static string $resource = DiscussAnswerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
