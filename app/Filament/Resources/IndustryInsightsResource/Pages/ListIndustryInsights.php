<?php

namespace App\Filament\Resources\IndustryInsightsResource\Pages;

use App\Filament\Resources\IndustryInsightsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndustryInsights extends ListRecords
{
    protected static string $resource = IndustryInsightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
