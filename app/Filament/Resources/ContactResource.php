<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Contact Form Submissions';
    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public static function getTableQuery()
    {
        return parent::getTableQuery()->orderBy('created_at', 'desc');
    }

    public static function canCreate(): bool
    {
        return false;
    }    

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
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('country'),
                TextColumn::make('city'),                
                TextColumn::make('industry')->sortable()->searchable(),
                TextColumn::make('inquiry')->sortable()->searchable(),
                TextColumn::make('content')->label('Message')->wrap(),
                TextColumn::make('created_at')->label('Submitted At')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
