<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use VendorName\Skeleton\Filament\Resources\ResourceName;

class ListModelNames extends ListRecords
{
    protected static string $resource = ResourceName::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label(__(':package_name::translations.pages.index.header_actions.create.label')),
        ];
    }
}
