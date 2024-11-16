<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use VendorName\Skeleton\Filament\Resources\ResourceName;

class EditModelName extends EditRecord
{
    protected static string $resource = ResourceName::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
