<?php

namespace App\Filament\Resources\ServiceGroups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('professional_id')
                    ->default(fn () => auth()->user()->professional_id ?? null),

                TextInput::make('title')
                    ->required()
                    ->label('Título'),

                Textarea::make('description')
                    ->label('Descripción'),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('service_groups')
                    ->label('Imagen'),
            ]);
    }
}
