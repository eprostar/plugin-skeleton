<?php

namespace VendorName\Skeleton\Filament\Resources\ResourceName\Pages;

use VendorName\Skeleton\Filament\Resources\ResourceName;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
