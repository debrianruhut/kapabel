<?php

namespace App\Filament\Resources\Messages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;

class MessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label('Full Name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email')
                    ->required(),
                TextInput::make('phone')
                    ->label('Phone')
                    ->required(),
                TextInput::make('company')
                    ->label('Company')
                    ->required(),
                Select::make('service_interest')
                    ->label('Service Interest')
                    ->options([
                        'General Inquiry' => 'General Inquiry',
                        'Tax Consultation' => 'Tax Consultation',
                        'Audit Services' => 'Audit Services',
                        'Management Consulting' => 'Management Consulting',
                    ])
                    ->required(),
                TextInput::make('budget')
                    ->label('Budget')
                    ->required(),
                TextInput::make('timeline')
                    ->label('Timeline')
                    ->required(),
                TextInput::make('how_did_you_hear')
                    ->label('How Did You Hear')
                    ->required(),
                Textarea::make('message')
                    ->label('Message')
                    ->required(),
                Toggle::make('is_read')
                    ->label('Is Read')
                    ->default(false),
                Toggle::make('is_replied')
                    ->label('Is Replied')
                    ->default(false),
            ]);
    }
}
