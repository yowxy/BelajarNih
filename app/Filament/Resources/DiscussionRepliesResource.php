<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscussionRepliesResource\Pages;
use App\Filament\Resources\DiscussionRepliesResource\RelationManagers;
use App\Models\DiscussionReplies;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscussionRepliesResource extends Resource
{
    protected static ?string $model = DiscussionReplies::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static ?string $navigationGroup = 'Discussion';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDiscussionReplies::route('/'),
            'create' => Pages\CreateDiscussionReplies::route('/create'),
            'edit' => Pages\EditDiscussionReplies::route('/{record}/edit'),
        ];
    }
}
