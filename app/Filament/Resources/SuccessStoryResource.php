<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuccessStoryResource\Pages;
use App\Models\SuccessStory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class SuccessStoryResource extends Resource
{
    protected static ?string $model = SuccessStory::class;

    protected static ?string $navigationGroup = 'Resources';    
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Section::make('Create a success story')
        ->description('create sucess stories posts here.')
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
            TextArea::make('summary')
            ->rows(5)
            ->cols(20)
            ->minLength(10)
            ->maxLength(300)
            ->required()
            ->columnSpanFull(),
            TiptapEditor::make('body')
            ->profile('default')   
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
                Section::make('Customer Info')
                ->schema([   
                    TextInput::make('customer_name')
                    ->required()
                    ->maxLength(255),                       
                    FileUpload::make('customer_logo')->image()->preserveFilenames()->directory('uploads/success-stories/logos')                    
                    ->disk('public'),
                ])->collapsible(),                
                Section::make('Cover Image')
                ->schema([
                    FileUpload::make('cover')->image()->imageEditor()->preserveFilenames()->required()->directory('uploads/success-storie/covers')
                    ->disk('public'),
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
                TextColumn::make('customer_name')->sortable()->searchable(),
                ImageColumn::make('customer_logo'),               
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
            'index' => Pages\ListSuccessStories::route('/'),
            'create' => Pages\CreateSuccessStory::route('/create'),
            'edit' => Pages\EditSuccessStory::route('/{record}/edit'),
        ];
    }
}
