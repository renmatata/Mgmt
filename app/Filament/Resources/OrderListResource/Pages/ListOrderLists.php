<?php

namespace App\Filament\Resources\OrderListResource\Pages;

use App\Filament\Resources\OrderListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderLists extends ListRecords
{
    protected static string $resource = OrderListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
