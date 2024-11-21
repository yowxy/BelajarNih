<?php

namespace App\Filament\Resources\DiscussionRepliesResource\Pages;

use App\Filament\Resources\DiscussionRepliesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiscussionReplies extends EditRecord
{
    protected static string $resource = DiscussionRepliesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
