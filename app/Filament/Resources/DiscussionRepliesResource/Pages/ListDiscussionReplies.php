<?php

namespace App\Filament\Resources\DiscussionRepliesResource\Pages;

use App\Filament\Resources\DiscussionRepliesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDiscussionReplies extends ListRecords
{
    protected static string $resource = DiscussionRepliesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
