<?php

namespace App\Filament\Resources\Tujuans\Pages;

use App\Filament\Resources\Tujuans\TujuanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTujuan extends CreateRecord
{
    protected static string $resource = TujuanResource::class;

    public function getTitle(): string
    {
        return 'Tambah Tujuan Aspirasi';
    }
}
