<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudyTipsResource\Pages;
use App\Filament\Resources\StudyTipsResource\RelationManagers;
use App\Models\StudyTips;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
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
                Forms\Components\TextInput::make('title')
                    ->helperText('harap di isi ya')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image_url')
                    ->disk('public')
                    ->label('gambar')
                    ->visibility('public')
                    ->required()
                    ->image(),

                RichEditor::make('content')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),


                Toggle::make('is_bookmarked')
                    ->label('Is Bookmarked?')
                    ->onColor('success')
                    ->offColor('danger')
                    ->inline(false), // Optional untuk styling
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                 Tables\Columns\ImageColumn::make('image_url')
                    ->disk('public')
                    ->circular()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
