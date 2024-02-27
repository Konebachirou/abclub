<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $label = 'Utilisateur';
    protected static ?string $pluralLabel = 'Utilisateurs';
    protected static ?string $navigationLabel = 'Utilisateurs';
    protected static ?string $navigationGroup = 'Utilisateurs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Information sur l\'utilisateur')
                    ->schema([
                        Section::make('Information de connexion')
                            ->schema([
                                Forms\Components\TextInput::make('firstName')
                                    ->required()
                                    ->label('Prénom'),
                                Forms\Components\TextInput::make('lastName')
                                    ->required()
                                    ->label('Nom'),
                                Forms\Components\TextInput::make('tel')
                                    ->tel()
                                    ->label('Téléphone'),
                                Forms\Components\TextInput::make('domaine')
                                    ->label('Profession')
                                    ->required(),
                                Forms\Components\TextInput::make('address')
                                    ->label('Adresse')
                                    ->required(),

                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->label('Email'),
                            ])->columns(3),
                        Section::make('Mot de passe')
                            ->schema([
                                Forms\Components\TextInput::make('password')
                                    ->password()
                                    ->placeholder('Entrer le mot de passe...')
                                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                                    ->dehydrated(fn ($state) => filled($state))
                                    ->required(fn (string $context): bool => $context === 'create'),
                                Forms\Components\Select::make('roles')
                                    ->label('Rôles')
                                    ->multiple()
                                    ->required()
                                    ->relationship('roles', 'name')
                                    ->preload(),
                            ])->columns(2),
                        Section::make('Statut')
                            ->schema([
                                Select::make('is_admin')
                                    ->options([
                                        '1' => 'oui',
                                        '0' => 'non',
                                    ])
                                    ->label('Administrateur')
                                    ->placeholder('Cet utilisateur est-il un admin ?'),
                                Select::make('is_member')
                                    ->options([
                                        '1' => 'oui',
                                        '0' => 'non',
                                    ])
                                    ->label('Membre')
                                    ->placeholder('Voulez vous etre membre ?'),
                                Forms\Components\Toggle::make('status')
                                    ->label('Cet utilisateur est-il actif ?'),
                            ])->columns(3),
                        Section::make('Image de l\'utilisateur')
                            ->schema([

                                FileUpload::make('image')
                                    ->image()->directory('utilisateur')->label("Image de l'utilisateur"),
                            ]),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Date de création')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Nom et Prenoms')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image'),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_member')
                    ->label('Membre')
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('status')
                    ->label('Status'),
                TextColumn::make('roles.name')
                    ->label('Rôles')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
