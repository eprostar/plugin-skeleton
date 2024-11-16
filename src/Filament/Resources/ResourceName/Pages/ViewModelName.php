<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use VendorName\Skeleton\Filament\Resources\ResourceName;

class ViewModelName extends ViewRecord
{
    protected static string $resource = ResourceName::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
