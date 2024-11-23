<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamPagesResource\Pages;
use App\Filament\Resources\ExamPagesResource\RelationManagers;
use App\Models\ExamPages;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
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
                Fieldset::make('Question')
                ->schema([
                    // ...
                    Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('question_text')
                    ->label('Pertanyaan')
                    ->required(),

                Forms\Components\TextInput::make('correct_answer')
                    ->label('Jawaban Benar')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('user_answer')
                    ->rows(10)
                    ->cols(20)
                    ->label('Jawaban Pengguna')
                    ->maxLength(255),
                ]),

                Fieldset::make('Answer')
                ->schema([
                    Forms\Components\TextInput::make('option_a')
                        ->label('Opsi A')
                        ->nullable()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('option_b')
                        ->label('Opsi B')
                        ->nullable()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('option_c')
                        ->label('Opsi C')
                        ->nullable()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('option_d')
                        ->label('Opsi D')
                        ->nullable()
                        ->maxLength(255),

                    Forms\Components\Toggle::make('is_correct')
                        ->onColor('success')
                        ->offColor('danger')
                        ->label('Benar?')
                        ->default(false),

                    Forms\Components\TextInput::make('score')
                        ->label('Skor')
                        ->integer()
                        ->numeric()
                        ->nullable(),
                ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                Tables\Columns\TextColumn::make('question_text')
                    ->label('Pertanyaan')
                    ->limit(50),

                 Tables\Columns\TextColumn::make('user_answer')
                    ->label('jawaban user'),


                Tables\Columns\TextColumn::make('score')
                    ->label('Skor'),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                DeleteAction::make()
                ->successNotification(
                    Notification::make()
                         ->success()
                         ->title('User deleted')
                         ->body('The user has been deleted successfully.'),
                 )
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
