<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('category')
                ->label('Kategori FAQ')
                ->placeholder('Contoh: Metode Pembayaran')
                ->required()
                ->columnSpanFull(),
            
            Repeater::make('qa_list')
                ->label('Daftar Pertanyaan & Jawaban')
                ->schema([
                    TextInput::make('question')
                        ->label('Pertanyaan')
                        ->required()
                        ->columnSpan(3),
                    Toggle::make('is_active')
                        ->label('Tampilkan')
                        ->default(true)
                        ->columnSpan(1),
                    Textarea::make('answer')
                        ->label('Jawaban')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),
                ])
                ->columns(4) // Membagi grid menjadi 4 bagian
                ->addActionLabel('Tambah FAQ Baru')
                ->collapsible()
                ->itemLabel(fn (array $state): ?string => $state['question'] ?? 'FAQ Baru')
                ->columnSpanFull(),
            ]);
    }
}
