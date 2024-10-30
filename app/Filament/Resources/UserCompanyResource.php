<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserCompanyResource\Pages;
use App\Models\UserCompany;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserCompanyResource extends Resource
{
    protected static ?string $model = UserCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static ?string $label = 'My Companies';

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
            'index' => Pages\ListUserCompanies::route('/'),
            'create' => Pages\CreateUserCompany::route('/create'),
            'edit' => Pages\EditUserCompany::route('/{record}/edit'),
        ];
    }
}
