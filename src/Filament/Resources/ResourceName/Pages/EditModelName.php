<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use VendorName\Skeleton\Filament\Resources\ResourceName;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

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
