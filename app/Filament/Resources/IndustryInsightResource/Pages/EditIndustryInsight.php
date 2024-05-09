<?php

namespace App\Filament\Resources\IndustryInsightResource\Pages;

use App\Filament\Resources\IndustryInsightResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndustryInsight extends EditRecord
{
    protected static string $resource = IndustryInsightResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
