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
                TextInput::make('company')->label('Entreprise')
                    ->required(),
                TextInput::make('domain')->label('Domaine')
                    ->required(),
                TextInput::make('job_title')->label('Titre de l\'offre')
                    ->required(),
                Select::make('type')
                    ->label('Type')
                    ->options([
                        'CDI' => 'CDI',
                        'CDD' => 'CDD',
                        'Alternance' => 'Alternance',
                        'Stage' => 'Stage',
                        'Freelance' => 'Freelance',
                        'Intérime' => 'Intérime',
                    ])
                    ->required(),
                TextInput::make('location')->label('Localisation')
                    ->required(),
                Select::make('pole_id')
                    ->label('Pole')
                    ->required()
                    ->options(\App\Models\Pole::pluck('name', 'id')),
                FileUpload::make('image')->label('Image')
                    ->image()->directory('job')->label("Image"),
                TextInput::make('job_link')->label('Lien du poste')
                    ->required(),

                RichEditor::make('content')->label('Contenu de l\'offre')
                    ->required(),
                RichEditor::make('description')->label('Description de l\'offre')
                    ->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('company')->label('Entreprise')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('location')->label('Localisation')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('domain')->label('Domaine')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('job_title')->label('Titre de l\'offre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')->label('Type')
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
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
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
