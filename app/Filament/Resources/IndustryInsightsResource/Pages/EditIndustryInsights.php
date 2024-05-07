<?php

namespace App\Filament\Resources\IndustryInsightsResource\Pages;

use App\Filament\Resources\IndustryInsightsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndustryInsights extends EditRecord
{
    protected static string $resource = IndustryInsightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
