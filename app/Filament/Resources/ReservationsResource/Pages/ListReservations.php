<?php

namespace App\Filament\Resources\ReservationsResource\Pages;

use App\Filament\Resources\ReservationsResource;
use App\Models\Reservations;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListReservations extends ListRecords
{
    protected static string $resource = ReservationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'This Week' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subWeek()))
                ->badge(Reservations::query()->where('date', '>=', now()->subWeek())->count()),
            'This Month' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subMonth()))
                ->badge(Reservations::query()->where('date', '>=', now()->subMonth())->count()),
            'This Year' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now()->subYear()))
                ->badge(Reservations::query()->where('date', '>=', now()->subYear())->count()),
        ];
    }
}
