<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatkulResource\Pages;
use App\Models\Matkul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;

class MatkulResource extends Resource
{
    protected static ?string $model = Matkul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nim')
                    ->required()
                    ->label('NIM'),
                TextInput::make('nama')
                    ->required()
                    ->label('Nama'),
                Select::make('matkul')
                    ->options([
                        'iot' => 'IOT',
                        'grid' => 'Grid',
                        'rekayasa web' => 'Rekayasa Web',
                        'mechin learning' => 'Mechin Learning',
                    ])
                    ->required()
                    ->label('Mata Kuliah'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')->label('NIM')->sortable()->searchable(),
                TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
                TextColumn::make('matkul')->label('Mata Kuliah')->sortable(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatkuls::route('/'),
            'create' => Pages\CreateMatkul::route('/create'),
            'edit' => Pages\EditMatkul::route('/{record}/edit'),
        ];
    }
}
