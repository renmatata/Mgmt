<?php

namespace App\Filament\Resources\EntranceFeeResource\Pages;

use App\Filament\Resources\EntranceFeeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntranceFees extends ListRecords
{
    protected static string $resource = EntranceFeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
