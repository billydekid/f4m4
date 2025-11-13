<?php

namespace App\Filament\Resources\Tenants\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TenantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->required(),
                TextInput::make('id')
                    ->label('Subdomain')
                    ->required()
                    ->prefix('http://')
                    ->suffix('.f4m4.intranet')
                    ->unique(ignorable: fn($record) => $record),
            ]);
    }
}
