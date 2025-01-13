<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Category;
use Filament\Forms\Components\Select;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255),

                        RichEditor::make('content')
                            ->required()
                            ->extraAttributes([
                                'style' => 'width: 100%;',
                            ])
                            ->columnSpanFull(),

                        Select::make('category_id')
                            ->label('Category')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('excerpt')
                            ->maxLength(255)
                            ->default(null),

                        TextInput::make('author_id')
                            ->default(fn() => auth()->id())  // Automatically set the author_id to the current authenticated user ID
                            ->required(),
                        // ->hidden(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('content')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('author_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
