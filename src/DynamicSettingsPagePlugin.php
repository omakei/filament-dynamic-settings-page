<?php


namespace IbrahimBedir\FilamentDynamicSettingsPage;


use Filament\Contracts\Plugin;
use Filament\Panel;
use IbrahimBedir\FilamentDynamicSettingsPage\Pages\SettingPage;

class DynamicSettingsPagePlugin implements Plugin
{

    public function getId(): string
    {
        return 'filament-dynamic-settings-page';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                SettingPage::class
            ]);
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }

    public static function make(): static
    {
        return app(static::class);
    }
}