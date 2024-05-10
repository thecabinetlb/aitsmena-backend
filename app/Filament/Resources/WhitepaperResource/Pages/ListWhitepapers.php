<?php

namespace App\Filament\Resources\WhitepaperResource\Pages;

use App\Filament\Resources\WhitepaperResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhitepapers extends ListRecords
{
    protected static string $resource = WhitepaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
