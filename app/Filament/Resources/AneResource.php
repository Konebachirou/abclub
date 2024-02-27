<?php

namespace App\Filament\Resources;

use App\Models\Ane;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use Illuminate\Support\Facades\Blade;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use pxlrbt\FilamentExcel\Columns\Column;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AneResource\Pages;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AneResource\RelationManagers;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

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
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nom_projet_entreprise')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('prenom')
                    ->label('Nom et prenom')
                    ->formatStateUsing(fn (Ane $record): string => $record->prenom . ' ' . $record->nom_de_famille),
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
            ->actions([ActionGroup::make([
                Tables\Actions\DeleteAction::make(), Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(function (Model $record) {
                        return response()->streamDownload(function () use ($record) {
                            echo Pdf::loadHtml(
                                Blade::render('pdf', ['record' => $record])
                            )->stream();
                        }, $record->nom_projet_entreprise . '.pdf');
                    }),

            ])->button()])
            ->headerActions([
                ExportAction::make('export')
                    ->exports([
                        ExcelExport::make()->withColumns([
                            Column::make('created_at')->heading('Creation date'),
                            Column::make('nom_projet_entreprise')->heading('Nom projet entreprise'),
                            Column::make('Choisissez_option_liste')->heading('Choisissez option liste'),
                            Column::make('nom_de_famille')->heading('Nom famille'),
                            Column::make('prenom')->heading('Prenom'),
                            Column::make('date_naissance')->heading('Date naissance'),
                            Column::make('numero_telephone')->heading('Numero telephone'),
                            Column::make('email')->heading('Email'),
                            Column::make('parcours_professionnel')->heading('Parcours professionnel'),
                            Column::make('code_postal')->heading('Code postal'),
                            Column::make('date_creation_entreprise')->heading('Date creation entreprise'),
                            Column::make('numero_siren')->heading('Numero siren'),
                            Column::make('nom_depose_societe')->heading('Nom depose societe'),
                            Column::make('etes_vous_associe')->heading('Etes vous associe'),
                            Column::make('activite')->heading('Activite'),
                            Column::make('decrivez_votre_activite')->heading('Decrivez votre activite'),
                            Column::make('segment_clients')->heading('Segment clients'),
                            Column::make('relation_client_envisagee')->heading('Relation client envisagee'),
                            Column::make('canaux_distribution')->heading('Canaux distribution'),
                            Column::make('proposition_valeur')->heading('Proposition valeur'),
                            Column::make('activite_cle')->heading('Activite cle'),
                            Column::make('ressources_cle')->heading('Ressources cle'),
                            Column::make('partenaires_cles')->heading('Partenaires cles'),
                            Column::make('structure_couts')->heading('Structure couts'),
                            Column::make('structure_revenus')->heading('Structure revenus'),
                            Column::make('ca_n1')->heading('Ca n1'),
                            Column::make('ca_n2')->heading('Ca n2'),
                            Column::make('ca_n3')->heading('Ca n3'),
                            Column::make('ca_n4')->heading('Ca n4'),
                            Column::make('effectif_n1')->heading('Effectif n1'),
                            Column::make('effectif_n2')->heading('Effectif n2'),
                            Column::make('effectif_n3')->heading('Effectif n3'),
                            Column::make('effectif_n4')->heading('Effectif n4'),
                            Column::make('info_fi')->heading('Info fi'),
                            Column::make('projet_developpement_afrique')->heading('Projet developpement afrique'),
                            Column::make('caractere_environnemental')->heading('Caractere environnemental'),
                            Column::make('caractere_innovant')->heading('Caractere innovant'),
                            Column::make('motivation_concours')->heading('Motivation concours'),
                            Column::make('site_internet')->heading('Site internet'),
                            Column::make('lien_video_presentation')->heading('Lien video presentation'),



                        ])->askForFilename()
                            ->askForWriterType(),
                    ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Exporter tous les enregistrements en une seule fois
                    ExportBulkAction::make()->exports([
                        ExcelExport::make()->withColumns([
                            Column::make('created_at')->heading('Creation date'),
                            Column::make('nom_projet_entreprise')->heading('Nom projet entreprise'),
                            Column::make('Choisissez_option_liste')->heading('Choisissez option liste'),
                            Column::make('nom_de_famille')->heading('Nom famille'),
                            Column::make('prenom')->heading('Prenom'),
                            Column::make('date_naissance')->heading('Date naissance'),
                            Column::make('numero_telephone')->heading('Numero telephone'),
                            Column::make('email')->heading('Email'),
                            Column::make('parcours_professionnel')->heading('Parcours professionnel'),
                            Column::make('code_postal')->heading('Code postal'),
                            Column::make('date_creation_entreprise')->heading('Date creation entreprise'),
                            Column::make('numero_siren')->heading('Numero siren'),
                            Column::make('nom_depose_societe')->heading('Nom depose societe'),
                            Column::make('etes_vous_associe')->heading('Etes vous associe'),
                            Column::make('activite')->heading('Activite'),
                            Column::make('decrivez_votre_activite')->heading('Decrivez votre activite'),
                            Column::make('segment_clients')->heading('Segment clients'),
                            Column::make('relation_client_envisagee')->heading('Relation client envisagee'),
                            Column::make('canaux_distribution')->heading('Canaux distribution'),
                            Column::make('proposition_valeur')->heading('Proposition valeur'),
                            Column::make('activite_cle')->heading('Activite cle'),
                            Column::make('ressources_cle')->heading('Ressources cle'),
                            Column::make('partenaires_cles')->heading('Partenaires cles'),
                            Column::make('structure_couts')->heading('Structure couts'),
                            Column::make('structure_revenus')->heading('Structure revenus'),
                            Column::make('ca_n1')->heading('Ca n1'),
                            Column::make('ca_n2')->heading('Ca n2'),
                            Column::make('ca_n3')->heading('Ca n3'),
                            Column::make('ca_n4')->heading('Ca n4'),
                            Column::make('effectif_n1')->heading('Effectif n1'),
                            Column::make('effectif_n2')->heading('Effectif n2'),
                            Column::make('effectif_n3')->heading('Effectif n3'),
                            Column::make('effectif_n4')->heading('Effectif n4'),
                            Column::make('info_fi')->heading('Info fi'),
                            Column::make('projet_developpement_afrique')->heading('Projet developpement afrique'),
                            Column::make('caractere_environnemental')->heading('Caractere environnemental'),
                            Column::make('caractere_innovant')->heading('Caractere innovant'),
                            Column::make('motivation_concours')->heading('Motivation concours'),
                            Column::make('site_internet')->heading('Site internet'),
                            Column::make('lien_video_presentation')->heading('Lien video presentation'),
                        ]),
                    ]),

                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnes::route('/'),

        ];
    }
}
