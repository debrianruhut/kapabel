<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('category')
                ->label('Kategori FAQ')
                ->searchable()
                ->sortable()
                ->weight('bold'),
                
            TextColumn::make('qa_list')
                ->label('Jumlah Pertanyaan')
                ->badge()
                ->color('success')
                // Menghitung jumlah repeater item (Q&A) yang ada di dalam array JSON
                ->getStateUsing(fn ($record): int => is_array($record->qa_list) ? count($record->qa_list) : 0)
                ->formatStateUsing(fn ($state): string => $state . ' Q&A'),
                
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
