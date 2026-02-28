<?php

namespace App\Filament\Resources\Experts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ExpertsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            ImageColumn::make('photo')
                ->label('Foto')
                ->circular(), // Menampilkan foto dalam bentuk bulat
                
            TextColumn::make('name')
                ->label('Nama')
                ->searchable()
                ->sortable()
                ->weight('bold'),
                
            TextColumn::make('position')
                ->label('Posisi')
                ->searchable(),
                
            TextColumn::make('order')
                ->label('Urutan')
                ->sortable()
                ->alignCenter(),
                
            ToggleColumn::make('is_active')
                ->label('Aktif'),
            ])->defaultSort('order', 'asc')
            ->filters([
                // TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
