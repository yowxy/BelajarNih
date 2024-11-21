<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizezResource\Pages;
use App\Filament\Resources\QuizezResource\RelationManagers;
use App\Models\Quizez;
use App\Models\Quizzes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuizezResource extends Resource
{
    protected static ?string $model = Quizzes::class;
    protected static ?string $navigationGroup = 'Learning';

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

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
            'index' => Pages\ListQuizezs::route('/'),
            'create' => Pages\CreateQuizez::route('/create'),
            'edit' => Pages\EditQuizez::route('/{record}/edit'),
        ];
    }
}
