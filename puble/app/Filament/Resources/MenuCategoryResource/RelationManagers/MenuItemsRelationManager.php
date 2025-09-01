<?php

namespace App\Filament\Resources\MenuCategoryResource\RelationManagers;

use App\Models\MenuItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class MenuItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title_ua')
                    ->required()
                    ->label('Назва (UA)'),

                Forms\Components\TextInput::make('title_en')
                    ->required()
                    ->label('Назва (EN)'),

                Forms\Components\Textarea::make('description_ua')
                    ->label('Опис (UA)'),

                Forms\Components\Textarea::make('description_en')
                    ->label('Опис (EN)'),

                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->label('Активний'),

                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0)
                    ->label('Порядок'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ua')->label('Назва (UA)')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title_en')->label('Назва (EN)')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Активний'),
                Tables\Columns\TextColumn::make('sort_order')->label('Порядок'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
