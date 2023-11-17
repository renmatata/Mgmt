<?php

namespace App\Filament\Resources\TakeOrderResource\Pages;

use App\Filament\Resources\TakeOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTakeOrder extends EditRecord
{
    protected static string $resource = TakeOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
