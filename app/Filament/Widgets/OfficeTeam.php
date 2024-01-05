<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use App\Filament\Resources\OfficeTeamResource;
use Filament\Widgets\TableWidget as BaseWidget;

class OfficeTeam extends BaseWidget
{
    protected static ?int $sort = 5;
    protected int| String | array $columnSpan = 'full';
    protected static ?string $heading = 'Conseil d Administration';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                OfficeTeamResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(6)
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('fullName')
                    ->searchable()
                    ->label('Nom et prenoms'),
                ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('office.name')->label('Office')
                    ->sortable(),
                Tables\Columns\TextColumn::make('level')
                    ->searchable()
                    ->label('Profession'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->label('Ville')
                    ->searchable(),
            ]);
    }
}
