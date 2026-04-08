<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    // ->hint('Enter your name')
                    ->helperText('This is your full name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email Address')
                    // ->hint('Enter your email address')
                    ->helperText('This is your email address')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Select::make('roles')
                    ->label('Role')
                    ->relationship('roles', 'name')
                    ->required(),
                TextInput::make('password')
                    ->label('Password')
                    ->helperText('Leave empty to keep current password')
                    ->password()
                    ->dehydrated(fn (?string $state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create')
                    ->minLength(9)
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Phone Number')
                    // ->hint('Enter your phone number')
                    ->helperText('This is your phone number')
                    ->numeric()
                    ->required()
                    ->maxLength(255),

                FileUpload::make('photo')
                    ->label('Photo Profile')
                    ->image()
                    ->directory('users')
                    ->disk('public')
                    ->helperText('Upload a user avatar image'),
            ]);
    }
}
