<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserLocationResource\Pages;
use App\Models\UserLocation;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserLocationResource extends Resource
{
    protected static ?string $model = UserLocation::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    public static ?string $label = 'My Locations';

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
            'index' => Pages\ListUserLocations::route('/'),
            'create' => Pages\CreateUserLocation::route('/create'),
            'edit' => Pages\EditUserLocation::route('/{record}/edit'),
        ];
    }
}
