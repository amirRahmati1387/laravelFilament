<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;

class FilamentAdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default() // این خط پنل پیش‌فرض را تنظیم می‌کند
            ->id('admin')
            ->path('admin')
            ->login() // مسیر لاگین را فعال می‌کند
            ->colors([
                'primary' => Color::Blue,
            ]);
    }
}


/*namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FilamentAdminPanelProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    // public function register(): void
    // {
        //
    // }

    /**
     * Bootstrap services.
     */
    // public function boot(): void
    // {
        //
    // }
// }
