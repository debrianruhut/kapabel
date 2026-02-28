<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('group_name')
                ->label('Nama Grup Pengaturan')
                ->placeholder('Contoh: Kontak Website')
                ->required()
                ->columnSpanFull(),
            
            Repeater::make('properties')
                ->label('Data Pengaturan')
                ->schema([
                    TextInput::make('key')
                        ->label('Kunci (Key)')
                        ->required(),
                    TextInput::make('value')
                        ->label('Nilai (Value)')
                        ->required(),
                    Toggle::make('is_active')
                        ->label('Aktif')
                        ->default(true) // Default langsung aktif saat ditambah
                        ->inline(false), // Menyesuaikan layout agar rapi
                ])
                ->columns(3) // Membagi menjadi 3 kolom sejajar
                ->addActionLabel('Tambah Pengaturan Baru')
                ->defaultItems(1)
                ->columnSpanFull(),
            ]);
    }
}
