<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Nuevo servicio')
                ->mutateDataUsing(function (array $data): array {
                    $data['professional_id'] = auth()->user()?->professional_id;

                    return $data;
                }),
        ];
    }
}
