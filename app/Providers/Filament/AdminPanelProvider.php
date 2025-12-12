<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;

use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // Identité du panel
            ->id('admin')
            ->path('admin')

            // Couleurs du thème
            ->colors([
                'primary' => Color::Amber,
            ])

            // Découverte automatique des ressources originales du panel Admin
            ->discoverResources(
                in: app_path('Filament/Admin/Resources'), 
                for: 'App\Filament\Admin\Resources'
            )

            // ❗ AJOUT MANUEL DE TES RESSOURCES PERSONNALISÉES
            ->resources([
                \App\Filament\Resources\Actualites\ActualiteResource::class,
            ])

            // Découverte des pages du panel Admin
            ->discoverPages(
                in: app_path('Filament/Admin/Pages'), 
                for: 'App\Filament\Admin\Pages'
            )

            // Pages personnalisées
            ->pages([
                Dashboard::class,
            ])            

            // Widgets Filament
            ->discoverWidgets(
                in: app_path('Filament/Admin/Widgets'),
                for: 'App\Filament\Admin\Widgets'
            )
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])

            // Middleware HTTP
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])

            // Authentification Filament
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
