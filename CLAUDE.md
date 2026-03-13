# Project Overview

Standalone PHP 8.3+ package providing typed backed enums for HTTP protocol primitives. Zero runtime dependencies.
Namespace: `SineMacula\Http\Enums\`.

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
