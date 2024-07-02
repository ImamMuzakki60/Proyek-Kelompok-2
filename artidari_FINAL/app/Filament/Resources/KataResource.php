<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KataResource\Pages;
use App\Filament\Resources\KataResource\RelationManagers;
use App\Models\Kata;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KataResource extends Resource
{
    protected static ?string $model = Kata::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Kata';

    protected static ?string $modelLabel = 'View Word';

    protected static ?string $navigationGroup = 'Manajemen Kata';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
                Forms\Components\TextInput::make('kata')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kategori')
                    ->required()
                    ->options([
                        'istilah_regional' => 'Istilah Regional',
                        'budaya_internet' => 'Budaya Internet',
                        'teknologi_gadget' => 'Teknologi Gadget',
                        'akronim' => 'Akronim',
                    ]),
                Forms\Components\Textarea::make('definisi')
                    ->required(),
                Forms\Components\Textarea::make('definisi_contoh')
                    ->required(),
                Forms\Components\Hidden::make('like')
                    ->default(0),
                Forms\Components\Hidden::make('dislike')
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kata')
                    ->searchable(),
                Tables\Columns\TextColumn::make('definisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('definisi_contoh')
                    ->searchable(),
                Tables\Columns\TextColumn::make('like')
                    ->label('Like')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('dislike')
                    ->label('Dislike')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKatas::route('/'),
            'create' => Pages\CreateKata::route('/create'),
            'view' => Pages\ViewKata::route('/{record}'),
            'edit' => Pages\EditKata::route('/{record}/edit'),
        ];
    }
}
