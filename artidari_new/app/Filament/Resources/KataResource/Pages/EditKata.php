<?php

namespace App\Filament\Resources\KataResource\Pages;

use App\Filament\Resources\KataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKata extends EditRecord
{
    protected static string $resource = KataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
