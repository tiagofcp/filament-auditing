<?php

namespace Tapp\FilamentAuditing;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\LaravelPackageTools\Package;
use Tapp\FilamentAuditing\RelationManagers\AuditsRelationManager;

class FilamentAuditingServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-auditing';

    protected array $relationManagers = [
        AuditsRelationManager::class,
    ];

    public function configurePackage(Package $package): void
    {
        parent::configurePackage($package);

        $package->name('filament-auditing')
            ->hasConfigFile('filament-auditing')
            ->hasTranslations('filament-auditing')
            ->hasViews('filament-auditing');
    }

    public function packageBooted(): void
    {
        parent::packageBooted();
    }
}
