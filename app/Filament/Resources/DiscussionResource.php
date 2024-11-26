<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscussionResource\Pages;
use App\Filament\Resources\DiscussionResource\RelationManagers;
use App\Models\Discussion;
use App\Models\Discussions;
use Filament\Forms;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscussionResource extends Resource
{
    protected static ?string $model = Discussions::class;

    protected static ?string $navigationGroup = 'Discussion';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Nama Diskusi')
                    ->helperText('Wajib di isi')
                    ->maxLength(255),

                 Forms\Components\Textarea::make('content')
                    ->required()
                    ->label('Deskripsi Diskusi'),


                 Forms\Components\FileUpload::make('image_url')
                    ->image()
                    ->required(),


                    Forms\Components\Select::make('is_solved')
                    ->label('Solved')
                    ->options([
                        'solved' => 'Solved',
                        'not solved' => 'Not Solved',
                    ])
                    ->default(0)


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),

                Tables\Columns\TextColumn::make('content')
                        ->searchable(),

                        Tables\Columns\TextColumn::make('is_solved')
                        ->label('Status')
                        ->color(fn ($state) => $state === 'solved' ? 'success' : 'danger')




            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                DeleteAction::make()
                ->label('Hapus') // Ubah label tombol
                ->modalHeading('Konfirmasi Penghapusan') // Judul modal konfirmasi
                ->modalSubheading('Apakah Anda yakin ingin menghapus data ini?') // Subjudul modal
                ->modalButton('Ya, Hapus') // Tombol di modal konfirmasi
                ->successNotificationTitle('Data berhasil dihapus'), // Notifikasi sukses
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
            'index' => Pages\ListDiscussions::route('/'),
            'create' => Pages\CreateDiscussion::route('/create'),
            'edit' => Pages\EditDiscussion::route('/{record}/edit'),
        ];
    }
}
