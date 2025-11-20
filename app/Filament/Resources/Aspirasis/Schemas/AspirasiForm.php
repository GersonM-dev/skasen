<?php

namespace App\Filament\Resources\Aspirasis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AspirasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Form Aspirasi')
                    ->columnSpanFull()
                    ->columns(4)
                    ->schema([
                        Hidden::make('user_id')
                            ->default(fn() => auth()->id())
                            ->required(),
                        TextInput::make('user_name')
                            ->label('Nama Pengirim')
                            ->default(fn() => auth()->user()?->name)
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),
                        TextInput::make('user_nis')
                            ->label('NIS')
                            ->default(fn() => auth()->user()?->nis)
                            ->disabled()
                            ->dehydrated(false)
                            ->columnSpan(1),
                        Select::make('tujuan_id')
                            ->label('Tujuan Aspirasi')
                            ->relationship('tujuan', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->columnSpan(1),
                        Select::make('kategori_id')
                            ->label('Kategori')
                            ->relationship('kategori', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->columnSpan(1),
                        RichEditor::make('keterangan')
                            ->label('Keterangan')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image_path')
                            ->label('Foto (opsional)')
                            ->directory('aspirasi')
                            ->image()
                            ->columnSpanFull(),
                        Toggle::make('is_anonymous')
                            ->label('Kirim sebagai anonim')
                            ->helperText('Jika diaktifkan, identitas pengirim tidak ditampilkan.')
                            ->default(false)
                            ->columnSpan(2),
                    ]),
            ]);
    }
}
