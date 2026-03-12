# Project Overview

`sinemacula/http-primitives` is a standalone, framework-agnostic PHP 8.3+ package providing typed backed enums for HTTP
protocol primitives. It has zero runtime dependencies.

The package provides enums for: `HttpStatus` (int-backed, all standard 1xx–5xx codes), `HttpMethod` (string-backed),
`MediaType` (common MIME types), `HttpHeader` (standard and common non-standard headers), `CacheDirective` (
Cache-Control values), and `AuthScheme` (authentication schemes). Each enum includes relevant helper methods.

Namespace: `SineMacula\Http\Enums\`. Symfony HttpFoundation is a dev-only dependency used in tests to verify
`HttpStatus` stays in sync with Symfony's `Response::HTTP_*` constants.

## Commands

```bash
composer install              # Install dependencies
composer check                # Run qlty static analysis (PHPStan level 8, PHP-CS-Fixer, CodeSniffer, etc.)
composer check -- --all --no-cache --fix  # Checks with auto-fix
composer format               # Format code via qlty
composer test                 # Run tests (Paratest, parallel execution)
composer test-coverage        # Run tests with clover coverage report

# Single test file
vendor/bin/phpunit tests/Unit/SomeTest.php

# Single test method
vendor/bin/phpunit --filter testMethodName tests/Unit/SomeTest.php
```

## Conventions

- Default branch: `master`. Branch prefixes: `feature/`, `bugfix/`, `hotfix/`, `refactor/`, `chore/`
- Use Conventional Commits
- Never mention AI tools in commit messages or code comments
- PHPStan level 8 (strict). All code must pass `composer check` before handoff
- Run `composer test` before handoff when executable PHP changes are made
- Keep changes minimal and scoped to the request; avoid unrelated refactors
- Do not change static analysis or formatting configuration without approval
