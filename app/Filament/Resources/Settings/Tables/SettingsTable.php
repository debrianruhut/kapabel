<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('group_name')
                ->label('Grup Pengaturan')
                ->searchable()
                ->sortable()
                ->weight('bold'),
                
            TextColumn::make('properties')
                ->label('Jumlah Item')
                ->badge()
                ->color('info')
                // Menghitung jumlah key-value yang ada di dalam array JSON
                ->getStateUsing(fn ($record): int => is_array($record->properties) ? count($record->properties) : 0)
                ->formatStateUsing(fn ($state): string => $state . ' Pengaturan'),
                
            TextColumn::make('updated_at')
                ->label('Terakhir Diperbarui')
                ->dateTime('d M Y, H:i')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: false),
            ])
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
