<?php

namespace App\Filament\Resources;

use App\Models\Ane;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Blade;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AneResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AneResource\RelationManagers;

class AneResource extends Resource
{
    protected static ?string $model = Ane::class;


    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $label = 'ANE';
    protected static ?string $pluralLabel = 'ANE';
    protected static ?string $navigationLabel = 'ANE';
    protected static ?string $navigationGroup = 'AMID';


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                TextColumn::make('nom_projet_entreprise')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nom_de_famille')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prenom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('numero_telephone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([ActionGroup::make([Tables\Actions\DeleteAction::make(), Tables\Actions\Action::make('pdf')
                ->label('PDF')
                ->color('success')
                ->icon('heroicon-o-arrow-down-tray')
                ->action(function (Model $record) {
                    return response()->streamDownload(function () use ($record) {
                        echo Pdf::loadHtml(
                            Blade::render('pdf', ['record' => $record])
                        )->stream();
                    }, $record->number . '.pdf');
                }),])->button()])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAnes::route('/'),
        ];
    }
}
