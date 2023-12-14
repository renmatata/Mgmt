<?php

namespace App\Filament\Resources\EntranceFeeResource\Pages;

use App\Filament\Resources\EntranceFeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntranceFee extends EditRecord
{
    protected static string $resource = EntranceFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
