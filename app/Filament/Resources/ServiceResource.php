<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static Heroicon | string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
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
                        modifyQueryUsing: fn (\Illuminate\Database\Eloquent\Builder $query) => 
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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->disk('public')
                    ->label('Imagen'),
                TextColumn::make('title')->label('Título')->searchable(),
                TextColumn::make('price')->label('Precio'),
                BooleanColumn::make('visible')->label('Visible'),
            ])
            ->filters([])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->check() && auth()->user()->professional_id) {
            return $query->where('professional_id', auth()->user()->professional_id);
        }

        return $query;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
