<?php

namespace App\Filament\Resources;

use App\Models\Job;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Livewire\PostulantJobChart;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JobResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JobResource\RelationManagers;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;


    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $label = 'Jobs';
    protected static ?string $navigationLabel = 'Job';
    protected static ?string $navigationGroup = 'Jobs';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Section::make('Informations sur L\entreprise')
                            ->schema([
                                TextInput::make('company')->label('Entreprise')
                                    ->label('Nom de l\'entreprise')
                                    ->required(),
                                TextInput::make('domain')->label('Domaine')
                                    ->label('Domaine de l\'entreprise')
                                    ->required(),
                                Section::make()
                                    ->schema([
                                        TextInput::make('location')->label('Localisation')
                                            ->label('Localisation de l\'entreprise')
                                            ->required(),
                                    ])->columns(1),

                                Section::make('Image de L\'entreprise')
                                    ->schema([
                                        FileUpload::make('image')->label('Image')
                                            ->image()->directory('job')->label("Image"),
                                    ])->columns(1),
                                Section::make('Description de L\'entreprise')
                                    ->schema([
                                        RichEditor::make('company_desc')->label('Description')
                                            ->required(),
                                    ])->columns(1),

                            ])->columns(2),
                        Section::make('Informations sur l\'offre')
                            ->schema([
                                TextInput::make('job_title')->label('Titre de l\'offre')
                                    ->required(),
                                Select::make('type')
                                    ->label('Type d\'offre')
                                    ->options([
                                        'CDI' => 'CDI',
                                        'CDD' => 'CDD',
                                        'Alternance' => 'Alternance',
                                        'Stage' => 'Stage',
                                        'Freelance' => 'Freelance',
                                        'Intérime' => 'Intérime',
                                    ])
                                    ->required(),
                                TextInput::make('job_link')->label('Lien du poste')
                                    ->required(),
                                Select::make('pole_id')
                                    ->label('Selectionner le Pole')
                                    ->required()
                                    ->options(\App\Models\Pole::pluck('name', 'id')),
                                Section::make()
                                    ->schema([
                                        RichEditor::make('mission')->label('Description de la mission')
                                            ->required(),
                                        RichEditor::make('diplomes')->label('Diplômes requis ')
                                            ->required(),
                                        RichEditor::make('experiences')->label('Expériences requises')
                                            ->required(),
                                        RichEditor::make('languages')->label('Langues')
                                            ->required(),
                                        RichEditor::make('competences')->label('Compétences et expertises')
                                            ->required(),
                                        RichEditor::make('process')->label('Processus de recrutement ')
                                            ->required(),
                                    ])->columns(2),
                            ])->columns(4),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y'),
                ImageColumn::make('image')->label('Image'),

                TextColumn::make('location')->label('Localisation')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('job_title')->label('Titre de l\'offre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')->label('Type')
                    ->badge()
                    ->color(function (Job $record) {
                        if ($record->type === 'CDI') {
                            return 'success';
                        } elseif ($record->type === 'CDD') {
                            return 'warning';
                        } elseif ($record->type === 'Alternance') {
                            return 'danger';
                        } elseif ($record->type === 'Stage') {
                            return 'info';
                        } elseif ($record->type === 'Freelance') {
                            return 'secondary';
                        } elseif ($record->type === 'Intérime') {
                            return 'primary';
                        }
                    })
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('status')
                    ->label('status'),
                TextColumn::make('pole.name')->label('Pole')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([ActionGroup::make([ViewAction::make(), Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])->button()])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
