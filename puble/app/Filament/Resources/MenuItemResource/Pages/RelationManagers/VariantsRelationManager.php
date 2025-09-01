<?php

namespace App\Filament\Resources\MenuItemResource\RelationManagers;

use App\Models\MenuItemVariant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class VariantsRelationManager extends RelationManager
{
    protected static string $relationship = 'variants';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('output')
                    ->label('Вихід')
                    ->maxLength(255),

                Forms\Components\TextInput::make('volume')
                    ->label('Обʼєм')
                    ->maxLength(255),

                Forms\Components\TextInput::make('price')
                    ->label('Ціна')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('currency')
                    ->default('UAH')
                    ->maxLength(10)
                    ->label('Валюта'),

                Forms\Components\Toggle::make('spec_offer')
                    ->default(false)
                    ->label('Спецпропозиція'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('output')->label('Вихід'),
                Tables\Columns\TextColumn::make('volume')->label('Обʼєм'),
                Tables\Columns\TextColumn::make('price')->label('Ціна'),
                Tables\Columns\TextColumn::make('currency')->label('Валюта'),
                Tables\Columns\IconColumn::make('spec_offer')->boolean()->label('Спецпропозиція'),
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
