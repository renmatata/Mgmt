<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TakeOrderResource\Pages;
use App\Filament\Resources\TakeOrderResource\RelationManagers;
use App\Models\TakeOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TakeOrderResource extends Resource
{
    protected static ?string $model = TakeOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTakeOrders::route('/'),
            'create' => Pages\CreateTakeOrder::route('/create'),
            'edit' => Pages\EditTakeOrder::route('/{record}/edit'),
        ];
    }
}
