<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PressReleaseResource\Pages;
use App\Filament\Resources\PressReleaseResource\RelationManagers;
use App\Models\PressRelease;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PressReleaseResource extends Resource
{
    protected static ?string $model = PressRelease::class;

    protected static ?string $navigationGroup = 'Resources';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('Create a press release')
        ->description('create press release here.')
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
            Select::make('industry_id')
            ->label('Industry')
            ->relationship('industry', 'title')
            ->searchable()
            ->required()
            ->columnSpanFull(),    
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
            ->fileAttachmentsDirectory('uploads/press-release/images')
            ->required()
            ->columnSpanFull(),
            DateTimePicker::make('published_at')->label('Published At')
            ->default(now())
            ->columnSpanFull(),            
            Toggle::make('is_featured')->label('Is Featured')->inline(),
            Toggle::make('is_arabic')->label('Is Arabic')->inline(),
            ])->columnSpan(1)->columns(2)
            ->collapsible(),
            Group::make()
            ->schema([
                Section::make('Cover Image')
                ->schema([
                    FileUpload::make('cover')->image()->imageEditor()->preserveFilenames()->required()->directory('uploads/press-release/covers')            
                ])->collapsible(),
                Section::make('Meta')
                ->schema([
                    TagsInput::make('tags')
                    ->suggestions([
                        'industrial digitalization',
                        'industrial innovation',
                        'system integrators',
                        'industrial digital templates',
                    ])
                    ->nestedRecursiveRules([
                        'min:3',
                        'max:255',
                    ])
                ])->collapsible(),
            ])->columnSpan(1)->columns(1)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ImageColumn::make('cover'),
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('slug'),
            TextColumn::make('industry.title')
            ->badge()
            ->sortable()->searchable(),            
            ToggleColumn::make('is_featured')->label('Featured'),
            ToggleColumn::make('is_arabic')->label('In Arabic'),
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
            'index' => Pages\ListPressReleases::route('/'),
            'create' => Pages\CreatePressRelease::route('/create'),
            'edit' => Pages\EditPressRelease::route('/{record}/edit'),
        ];
    }
}
