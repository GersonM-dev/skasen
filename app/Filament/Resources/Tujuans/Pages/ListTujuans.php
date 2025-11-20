<?php

namespace App\Filament\Resources\Tujuans\Pages;

use App\Filament\Resources\Tujuans\TujuanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTujuans extends ListRecords
{
    protected static string $resource = TujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Tambah Tujuan Aspirasi'),
        ];
    }
}
