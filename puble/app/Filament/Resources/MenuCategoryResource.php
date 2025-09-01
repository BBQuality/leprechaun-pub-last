<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuCategoryResource\Pages;
use App\Filament\Resources\MenuCategoryResource\RelationManagers\MenuItemsRelationManager;
use App\Models\MenuCategory;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class MenuCategoryResource extends Resource
{
    protected static ?string $model = MenuCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_ua')->required()->label('Назва (UA)'),
                Forms\Components\TextInput::make('title_en')->required()->label('Назва (EN)'),
                Forms\Components\TextInput::make('key')->required()->label('Ключ'),
                Forms\Components\TextInput::make('type')->required()->label('Тип'),
                Forms\Components\TextInput::make('sort_order')->numeric()->default(0)->label('Порядок'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ua')->label('Назва (UA)'),
                Tables\Columns\TextColumn::make('title_en')->label('Назва (EN)'),
                Tables\Columns\TextColumn::make('type')->label('Тип'),
                Tables\Columns\TextColumn::make('sort_order')->label('Порядок'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            MenuItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuCategories::route('/'),
            'create' => Pages\CreateMenuCategory::route('/create'),
            'edit' => Pages\EditMenuCategory::route('/{record}/edit'),
        ];
    }
}
