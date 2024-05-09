<?php

namespace App\Filament\Resources\IndustryInsightResource\Pages;

use App\Filament\Resources\IndustryInsightResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndustryInsight extends ListRecords
{
    protected static string $resource = IndustryInsightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
