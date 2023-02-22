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
        if (! empty(config('posthog.key'))) {
            PostHog::init(config('posthog.key'), ['host' => empty(config('posthog.host')) ? 'https://app.posthog.com' : config('posthog.host')]);
        }
    }
}
