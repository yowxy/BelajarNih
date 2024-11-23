<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClasesResource\Pages;
use App\Filament\Resources\ClasesResource\RelationManagers;
use App\Models\Clases;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClasesResource extends Resource
{
    protected static ?string $model = Clases::class;
    protected static ?string $navigationGroup = 'Learning';

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Text')
                    ->schema([
                        // ...
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Class Name')
                            ->helperText('Wajib di isi'),


                        Forms\Components\TextInput::make('video_url')
                            ->label('video_url')
                            ->helperText('wajib di isi'),


                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->label('Description Class')
                            ->rows(10)
                            ->cols(20),


                        TimePicker::make('duration')
                            ->label('Duration Video Course')
                            ->datalist([
                                '09:00',
                                '09:30',
                                '10:00',
                                '10:30',
                                '11:00',
                                '11:30',
                                '12:00',
                            ])
                    ]),


                Fieldset::make('Upload Image')
                    ->schema([
                                FileUpload::make('thumbnail')
                                    ->required()
                                    ->image(),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('created_at')->date(),
            ])
            ->filters([

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
            'index' => Pages\ListClases::route('/'),
            'create' => Pages\CreateClases::route('/create'),
            'edit' => Pages\EditClases::route('/{record}/edit'),
        ];
    }
}
