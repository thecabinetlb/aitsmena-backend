<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GraduateProgramResource\Pages;
use App\Filament\Resources\GraduateProgramResource\RelationManagers;
use App\Models\GraduateProgram;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class GraduateProgramResource extends Resource
{
    protected static ?string $model = GraduateProgram::class;

    protected static ?string $navigationGroup = 'Careers';    
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('Create a graduate program job posting')
            ->schema([
            TextInput::make('title')
            ->live(onBlur:true)
            ->unique(ignoreRecord: true)
            ->required()->minLength(1)->maxLength(150)
            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                if ($operation === 'edit') {
                    return;
                }                    
                $set('slug', Str::slug($state));
            }),
            TextInput::make('slug')->unique(ignoreRecord: true)->required()->minLength(1)->maxLength(150), 
            Textarea::make('summary')
            ->rows(5)
            ->cols(20)
            ->minLength(10)
            ->maxLength(300)
            ->required()
            ->columnSpanFull(),
            RichEditor::make('body')
            ->toolbarButtons([
                'attachFiles',
                'blockquote',
                'bold',
                'bulletList',
                'codeBlock',
                'h2',
                'h3',
                'italic',
                'link',
                'orderedList',
                'redo',
                'strike',
                'underline',
                'undo','textColor'
            ])
            ->required()
            ->columnSpanFull(),
            DateTimePicker::make('published_at')->label('Published At')
            ->default(now())
            ->columnSpanFull(),            
            Toggle::make('is_featured')->label('Is Featured')->inline(),
            ])->columnSpan(2)->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('slug'),           
            TextColumn::make('location')->sortable()->searchable(),
            TextColumn::make('type')->badge()->sortable()->searchable(),
            ToggleColumn::make('is_featured')->label('Featured'),
            TextColumn::make('published_at')->label('Published At')
            ->dateTime('M-d-Y')
            ->sortable()
            ->searchable(),
            TextColumn::make('created_at')
            ->dateTime('M-d-Y'),                  
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
            'index' => Pages\ListGraduatePrograms::route('/'),
            'create' => Pages\CreateGraduateProgram::route('/create'),
            'edit' => Pages\EditGraduateProgram::route('/{record}/edit'),
        ];
    }
}
