<?php

namespace App\Filament\Resources\KataResource\Pages;

use App\Filament\Resources\KataResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKata extends ViewRecord
{
    protected static string $resource = KataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
