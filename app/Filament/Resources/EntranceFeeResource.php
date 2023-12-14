<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntranceFeeResource\Pages;
use App\Filament\Resources\EntranceFeeResource\RelationManagers;
use App\Models\EntranceFee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntranceFeeResource extends Resource
{
    protected static ?string $model = EntranceFee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'date';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('date')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),
                Forms\Components\TextInput::make('kids')
                    ->id('kids')
                    ->numeric(),
                Forms\Components\TextInput::make('adults')
                    ->id('adults')
                    ->numeric(),
                Forms\Components\Textarea::make('Total')
                    ->id('total')
                    // ->disabled(true)
            ])->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Kids')
                    ->numeric(),
                Tables\Columns\TextColumn::make('Adults')
                    ->numeric(),
                Tables\Columns\TextColumn::make('Total')
                    ->default(0)
                    ->numeric(),
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
            'index' => Pages\ListEntranceFees::route('/'),
            'create' => Pages\CreateEntranceFee::route('/create'),
            'edit' => Pages\EditEntranceFee::route('/{record}/edit'),
        ];
    }
}

