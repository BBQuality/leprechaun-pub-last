<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderItemResource\Pages;
use App\Models\SliderItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SliderItemResource extends Resource
{
    protected static ?string $model = SliderItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Слайдер';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Назва')
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Опис'),
            Forms\Components\TextInput::make('slogan')
                ->label('Слоган'),
            Forms\Components\TextInput::make('price')
                ->label('Ціна')
                ->numeric(),
            Forms\Components\FileUpload::make('image')
                ->image()
                ->label('Зображення')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Назва'),
            Tables\Columns\TextColumn::make('price')->label('Ціна')->money('uah'),
            Tables\Columns\ImageColumn::make('image')->label('Зображення'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliderItems::route('/'),
            'create' => Pages\CreateSliderItem::route('/create'),
            'edit' => Pages\EditSliderItem::route('/{record}/edit'),
        ];
    }
}
