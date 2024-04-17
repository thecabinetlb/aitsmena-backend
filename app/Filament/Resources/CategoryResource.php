<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->live()
                ->required()->minLength(1)->maxLength(50)
                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                    if ($operation === 'edit') {
                        return;
                    }
                    $set('slug', Str::slug($state));
                }),
            TextInput::make('slug')->unique(ignoreRecord: true)->required()->minLength(1)->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextInput::make('title')
                ->live(onBlur:true)
                ->unique(ignoreRecord: true)
                ->required()->minLength(1)->maxLength(50)
                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                    if ($operation === 'edit') {
                        return;
                    }
                    $set('slug', Str::slug($state));              
                }),
                TextInput::make('slug')->unique(ignoreRecord: true)->required()->minLength(1)->maxLength(50),
                TextColumn::make('created_at')
                ->dateTime('M-d-Y')
                ->sortable()
                ->searchable(),
                TextColumn::make('updated_at')
                ->dateTime('M-d-Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
