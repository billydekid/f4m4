<?php

namespace App\Filament\Resources\Tenants\Pages;

use App\Filament\Resources\Tenants\TenantResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTenant extends CreateRecord
{
    protected static string $resource = TenantResource::class;

    public function afterCreate(): void
    {
        $this->record->domains()->create([
            'domain' => $this->record->id,
        ]);
    }
}
