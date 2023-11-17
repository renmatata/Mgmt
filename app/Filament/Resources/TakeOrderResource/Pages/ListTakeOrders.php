<?php

namespace App\Filament\Resources\TakeOrderResource\Pages;

use App\Filament\Resources\TakeOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTakeOrders extends ListRecords
{
    protected static string $resource = TakeOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
