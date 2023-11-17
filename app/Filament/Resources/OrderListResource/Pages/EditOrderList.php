<?php

namespace App\Filament\Resources\OrderListResource\Pages;

use App\Filament\Resources\OrderListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderList extends EditRecord
{
    protected static string $resource = OrderListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
