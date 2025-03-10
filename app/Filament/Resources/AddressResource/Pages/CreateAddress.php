<?php

namespace App\Filament\Resources\AddressResource\Pages;

use App\Filament\Resources\AddressResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAddress extends CreateRecord
{
    protected static string $resource = AddressResource::class;

    protected static ?string $title = 'Formulaire de création';

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
