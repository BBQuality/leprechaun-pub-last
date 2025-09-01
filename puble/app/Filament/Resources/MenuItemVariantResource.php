<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuItemVariantResource\Pages;
use App\Models\MenuItemVariant;
use Filament\Forms;
use Filament\Forms\Form; // правильно
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table; // правильно

class MenuItemVariantResource extends Resource
{
    protected static ?string $model = MenuItemVariant::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $navigationLabel = 'Варіанти';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('menu_item_id')
                ->relationship('menuItem', 'name')
                ->label('Страва')
                ->required(),
            Forms\Components\TextInput::make('name')->label('Назва')->required(),
            Forms\Components\TextInput::make('price')->label('Ціна')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('menuItem.name')->label('Страва'),
            Tables\Columns\TextColumn::make('name')->label('Назва'),
            Tables\Columns\TextColumn::make('price')->label('Ціна')->money('uah'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuItemVariants::route('/'),
            'create' => Pages\CreateMenuItemVariant::route('/create'),
            'edit' => Pages\EditMenuItemVariant::route('/{record}/edit'),
        ];
    }
}
