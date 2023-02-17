# PostHog for Laravel
[![Latest Version on Packagist](https://img.shields.io/packagist/v/arcdigital/laravel-posthog.svg?style=flat-square)](https://packagist.org/packages/arcdigital/laravel-posthog)
[![Total Downloads](https://img.shields.io/packagist/dt/arcdigital/laravel-posthog.svg?style=flat-square)](https://packagist.org/packages/arcdigital/laravel-posthog)
[![Tests](https://img.shields.io/github/actions/workflow/status/arcdigital/laravel-posthog/run-tests.yml?branch=master&label=tests&style=flat-square)](https://github.com/arcdigital/laravel-posthog/actions/workflows/run-tests.yml)
[![PHPStan](https://img.shields.io/github/actions/workflow/status/arcdigital/laravel-posthog/phpstan.yml?branch=master&label=phpstan&style=flat-square)](https://github.com/arcdigital/laravel-posthog/actions/workflows/phpstan.yml)
[![Code Style](https://img.shields.io/github/actions/workflow/status/arcdigital/laravel-posthog/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/arcdigital/laravel-posthog/actions/workflows/fix-php-code-style-issues.yml)

A package for integrating PostHog with your Laravel app.

## Installation

You can install the package via composer:

```bash
composer require arcdigital/laravel-posthog
```

If you are using Laravel, you can publish the config file with:

You can publish the config file with:

```bash
php artisan vendor:publish --tag="posthog-config"
```

## Usage

```php
use PostHog\PostHog;

PostHog::capture(array(
    'distinctId' => 'test-user',
    'event' => 'test-event'
));
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Anand Capur](https://github.com/arcdigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
