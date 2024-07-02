<?php

namespace App\Filament\Resources\KataResource\Pages;

use App\Filament\Resources\KataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKatas extends ListRecords
{
    protected static string $resource = KataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
