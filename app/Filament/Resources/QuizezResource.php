<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizezResource\Pages;
use App\Filament\Resources\QuizezResource\RelationManagers;
use App\Models\Quizez;
use App\Models\Quizzes;
use Filament\Tables\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
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

                Forms\Components\TextInput::make('title')
                    ->label('Pertanyaan')
                    ->required()
                    ->helperText('wajib di isi ya !!')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->helperText('wajib di isi ya !!')
                    ->rows(10)
                    ->cols(20),
                Forms\Components\TextInput::make('total_questions')
                    ->helperText('wajib di isi ya !!')
                    ->numeric()
                    ->integer()
                    ->prefix('Quest')
                    ->required(),

                    Fieldset::make('option')
                    ->schema([
                        Forms\Components\TextInput::make('option_a')
                            ->label('opsi a')
                            ->required()
                            ->prefix('A'),


                        Forms\Components\TextInput::make('option_b')
                            ->label('opsi b')
                            ->required()
                            ->prefix('B'),


                        Forms\Components\TextInput::make('option_c')
                            ->label('opsi c')
                            ->required()
                            ->prefix('C'),



                        Forms\Components\TextInput::make('option_d')
                            ->label('opsi d')
                            ->required()
                            ->prefix('D'),

                        Forms\Components\TextInput::make('correct_answer')
                            ->label('jawaban benar')
                            ->required()
                            ->prefix('Coorect'),

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Pertanyaan'),
                Tables\Columns\TextColumn::make('correct_answer')
                ->searchable()
                ->label('Jawaban benar'),
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
            'index' => Pages\ListQuizezs::route('/'),
            'create' => Pages\CreateQuizez::route('/create'),
            'edit' => Pages\EditQuizez::route('/{record}/edit'),
        ];
    }
}
