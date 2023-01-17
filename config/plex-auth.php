{
    "name": "caricorp/plex-auth",
    "description": "SSO for Plex Apps",
    "keywords": [
        "caricorp",
        "laravel",
        "plex-auth"
    ],
    "homepage": "https://github.com/caricorp/plex-auth",
    "license": "MIT",
    "authors": [
        {
            "name": "CARI Corp",
            "email": "service@cari.net",
            "role": "Developer"
        }
    ],
    "require": {
        "php": "^8.1",
        "illuminate/contracts": "^9.0"
    },
    "require-dev": {
        "laravel/pint": "^1.0",
        "nunomaduro/collision": "^6.0",
        "orchestra/testbench": "^7.0",
        "pestphp/pest": "^1.21",
        "pestphp/pest-plugin-laravel": "^1.1",
        "phpunit/phpunit": "^9.5"
    },
    "autoload": {
        "psr-4": {
            "Cari\\PlexAuth\\": "src",
            "Cari\\PlexAuth\\Database\\Factories\\": "database/factories"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Cari\\PlexAuth\\Tests\\": "tests"
        }
    },
    "scripts": {
        "post-autoload-dump": "@php ./vendor/bin/testbench package:discover --ansi",
        "analyse": "vendor/bin/phpstan analyse",
        "test": "vendor/bin/pest",
        "test-coverage": "vendor/bin/pest --coverage",
        "format": "vendor/bin/pint"
    },
    "config": {
        "sort-packages": true,
        "allow-plugins": {
            "pestphp/pest-plugin": true,
            "phpstan/extension-installer": true
        }
    },
    "extra": {
        "laravel": {
            "providers": [
                "Cari\\PlexAuth\\PlexAuthServiceProvider"
            ],
            "aliases": {
                "PlexAuth": "Cari\\PlexAuth\\Facades\\PlexAuth"
            }
        }
    },
    "minimum-stability": "dev",
    "prefer-stable": true
}