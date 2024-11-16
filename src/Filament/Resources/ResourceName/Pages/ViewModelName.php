<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use VendorName\Skeleton\Filament\Resources\ResourceName;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

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
