<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudyTipsResource\Pages;
use App\Filament\Resources\StudyTipsResource\RelationManagers;
use App\Models\StudyTips;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudyTipsResource extends Resource
{
    protected static ?string $model = StudyTips::class;

    protected static ?string $navigationGroup = 'Learning';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

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
            'index' => Pages\ListStudyTips::route('/'),
            'create' => Pages\CreateStudyTips::route('/create'),
            'edit' => Pages\EditStudyTips::route('/{record}/edit'),
        ];
    }
}
