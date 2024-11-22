<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscussAnswerResource\Pages;
use App\Filament\Resources\DiscussAnswerResource\RelationManagers;
use App\Models\DiscussAnswer;
use App\Models\DiscussionAnswer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscussAnswerResource extends Resource
{
    protected static ?string $model = DiscussionAnswer::class;
    protected static ?string $navigationGroup = 'Discussion';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

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
            'index' => Pages\ListDiscussAnswers::route('/'),
            'create' => Pages\CreateDiscussAnswer::route('/create'),
            'edit' => Pages\EditDiscussAnswer::route('/{record}/edit'),
        ];
    }
}
