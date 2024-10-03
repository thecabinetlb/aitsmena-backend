<?php

namespace App\Filament\Resources\GraduateProgramResource\Pages;

use App\Filament\Resources\GraduateProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGraduatePrograms extends ListRecords
{
    protected static string $resource = GraduateProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
