<?php

namespace App\Filament\Resources\Tujuans\Pages;

use App\Filament\Resources\Tujuans\TujuanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTujuan extends EditRecord
{
    protected static string $resource = TujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
