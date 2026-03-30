<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()->schema([
                    \Filament\Forms\Components\Hidden::make('user_id')
                        ->default(fn () => auth()->id()),
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                        ])
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TextInput::make('excerpt')
                        ->required(),
                    RichEditor::make('content')
                        ->required(),
                    Select::make('tags')
                        ->relationship('tags', 'name')
                        ->multiple()
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                        ]),
                    FileUpload::make('image')
                        ->image()
                        ->directory('articles')
                        ->disk('public')
                        ->required(),
                    Select::make('status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                        ])
                        ->required(),
                    Select::make('is_featured')
                        ->options([
                            '0' => 'No',
                            '1' => 'Yes',
                        ])
                        ->required(),
                ])
            ]);
    }
}
