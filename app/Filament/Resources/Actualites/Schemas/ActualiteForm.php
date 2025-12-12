<?php

namespace App\Filament\Resources\Actualites\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ActualiteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titre')
                    ->required(),

                Textarea::make('contenu')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('actualites')
                    ->visibility('public')

                    // --- Recadrage automatique ---
                    ->imageEditor() // possibilité d’éditer dans Filament                    

                    // --- Facultatif mais recommandé ---
                    ->optimize() // pour réduire le poids
                    ->required(),

                DateTimePicker::make('published_at'),
            ]);
    }
}
