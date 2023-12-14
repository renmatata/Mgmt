// app/Filament/Forms/TakeOrderFormOne.php

namespace App\Filament\Forms;

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

class BillForm extends Form
{
    public static function form(Form $form): Form
    {
    return $form
        ->schema([
        //
        ]);
    }
}