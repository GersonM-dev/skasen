<?php

namespace App\Filament\Resources\Tujuans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TujuanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->label('Nama Tujuan Aspirasi')
                ->required()
                ->columnSpanFull(),
            ]);
    }
}
