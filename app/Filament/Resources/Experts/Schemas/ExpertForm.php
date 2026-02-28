<?php

namespace App\Filament\Resources\Experts\Schemas;


use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ExpertForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            // BAGIAN 1: Informasi Utama Konsultan
            Section::make('Informasi Utama')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->columnSpanFull()
                            ->required(),
                        TextInput::make('position')
                            ->label('Posisi / Jabatan')
                            ->columnSpanFull()
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->columnSpanFull()
                            ->email(),
                        TextInput::make('linkedin')
                            ->label('URL LinkedIn')
                            ->columnSpanFull()
                            ->url(),
                    ]),
                    
                    FileUpload::make('photo')
                        ->label('Foto Profil')
                        ->image()
                        ->directory('experts') // Akan tersimpan di storage/app/public/experts
                        ->required(),
                        
                    Textarea::make('bio')
                        ->label('Biografi Singkat')
                        ->rows(5)
                        ->required(),
                        
                    Grid::make(2)->schema([
                        TextInput::make('order')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label('Status Ahli (Aktif/Tidak)')
                            ->default(true)
                            ->inline(false),
                    ]),
            ]),
            
            // BAGIAN 2: Sertifikasi (Kolom JSON)
            Group::make()
            ->schema([
                Section::make('Sertifikasi')
                    ->schema([
                        Repeater::make('certifications')
                            ->hiddenLabel() // Sembunyikan label karena sudah diwakili judul Section
                            ->schema([
                                TextInput::make('nama_sertifikat')
                                    ->label('Nama Sertifikat')
                                    ->required()
                                    ->columnSpanFull(),
                                // TextInput::make('tahun')
                                //     ->label('Tahun')
                                //     ->numeric()
                                //     ->columnSpan(2),
                                Toggle::make('is_active')
                                    ->label('Tampilkan')
                                    ->default(true)
                                    ->columnSpanFull(),
                            ])
                            // Ubah columns menjadi 1 karena berada di kolom kanan yang sempit
                            ->columns(1) 
                            ->addActionLabel('Tambah Sertifikasi')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['nama_sertifikat'] ?? 'Sertifikasi Baru'),
                ]),

                // BAGIAN 3: Pengalaman Kerja (Kolom JSON)
                Section::make('Pengalaman Kerja')
                    ->schema([
                        Repeater::make('experiences')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('perusahaan')
                                    ->label('Nama Perusahaan / Instansi')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('peran')
                                    ->label('Peran / Jabatan')
                                    ->required()
                                    ->columnSpanFull(),
                                TextInput::make('periode')
                                    ->label('Periode (Cth: 2020 - 2023)')
                                    ->required()
                                    ->columnSpanFull(),
                                Textarea::make('deskripsi')
                                    ->label('Deskripsi Singkat')
                                    ->rows(3)
                                    ->required()
                                    ->columnSpanFull(),
                                Toggle::make('is_active')
                                    ->label('Tampilkan')
                                    ->default(true)
                                    ->columnSpanFull(),
                            ])
                            // Ubah columns menjadi 1 agar isian berjejer ke bawah rapi
                            ->columns(1) 
                            ->addActionLabel('Tambah Pengalaman')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['perusahaan'] ?? 'Pengalaman Baru'),
                ]),
            ]),
        ]);
    }
}
