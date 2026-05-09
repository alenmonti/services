<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class ServiceForm
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

                Select::make('service_group_id')
                    ->relationship(
                        name: 'group',
                        titleAttribute: 'title',
                        modifyQueryUsing: fn (Builder $query) => 
                            auth()->check() && auth()->user()->professional_id 
                                ? $query->where('professional_id', auth()->user()->professional_id)
                                : $query
                    )
                    ->label('Grupo de Servicio')
                    ->nullable(),

                Textarea::make('description')
                    ->label('Descripción'),

                TextInput::make('price')
                    ->numeric()
                    ->label('Precio'),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->label('Imagen'),

                Toggle::make('visible')
                    ->label('Visible')
                    ->default(true),
            ]);
    }
}
