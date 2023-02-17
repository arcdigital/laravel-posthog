<?php

namespace Arcdigital\PostHog;

use PostHog\PostHog;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PostHogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-posthog')
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        if ($key = config('posthog.key')) {
            PostHog::init($key, ['host' => config('posthog.host', 'https://app.posthog.com')]);
        }
    }
}
