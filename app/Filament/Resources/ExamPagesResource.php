<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamPagesResource\Pages;
use App\Filament\Resources\ExamPagesResource\RelationManagers;
use App\Models\ExamPages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamPagesResource extends Resource
{
    protected static ?string $model = ExamPages::class;
    protected static ?string $navigationGroup = 'Learning';
    protected static ?string $navigationIcon = 'heroicon-o-calculator';

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
            'index' => Pages\ListExamPages::route('/'),
            'create' => Pages\CreateExamPages::route('/create'),
            'edit' => Pages\EditExamPages::route('/{record}/edit'),
        ];
    }
}
