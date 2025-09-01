<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuItemResource\Pages;
use App\Filament\Resources\MenuItemResource\RelationManagers\VariantsRelationManager;
use App\Models\MenuItem;
use Filament\Forms;
use Filament\Forms\Form; // правильно
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table; // правильно

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?string $navigationLabel = 'Страви';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('menu_category_id')
                ->relationship('menuCategory', 'name')
                ->label('Категорія')
                ->required(),
            Forms\Components\TextInput::make('name')->label('Назва')->required(),
            Forms\Components\Textarea::make('description')->label('Опис'),
            Forms\Components\FileUpload::make('image')->label('Зображення')->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Назва')->searchable(),
            Tables\Columns\TextColumn::make('menuCategory.name')->label('Категорія'),
            Tables\Columns\ImageColumn::make('image')->label('Зображення'),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            VariantsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuItems::route('/'),
            'create' => Pages\CreateMenuItem::route('/create'),
            'edit' => Pages\EditMenuItem::route('/{record}/edit'),
        ];
    }
}
