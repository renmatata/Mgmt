<?php

namespace App\Filament\Resources\OrderListResource\Pages;

use App\Filament\Resources\OrderListResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderList extends CreateRecord
{
    protected static string $resource = OrderListResource::class;
}
