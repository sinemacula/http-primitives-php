# HTTP Primitives

[![Latest Stable Version](https://img.shields.io/packagist/v/sinemacula/http-primitives.svg)](https://packagist.org/packages/sinemacula/http-primitives)
[![Build Status](https://github.com/sinemacula/http-primitives/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/sinemacula/http-primitives/actions/workflows/tests.yml)
[![Maintainability](https://qlty.sh/gh/sinemacula/projects/http-primitives/maintainability.svg)](https://qlty.sh/gh/sinemacula/projects/http-primitives)
[![Code Coverage](https://qlty.sh/gh/sinemacula/projects/http-primitives/coverage.svg)](https://qlty.sh/gh/sinemacula/projects/http-primitives)
[![Total Downloads](https://img.shields.io/packagist/dt/sinemacula/http-primitives.svg)](https://packagist.org/packages/sinemacula/http-primitives)

Standalone, framework-agnostic PHP 8.3+ package providing typed backed enums for HTTP protocol primitives. Zero runtime
dependencies.

## Enums

| Enum             | Backing Type | Cases | Description                              |
|------------------|--------------|-------|------------------------------------------|
| `HttpStatus`     | `int`        | 63    | All standard HTTP status codes (1xx-5xx) |
| `HttpMethod`     | `string`     | 9     | HTTP request methods per RFC 9110        |
| `MediaType`      | `string`     | 42    | Common MIME types across 7 categories    |
| `HttpHeader`     | `string`     | 60    | Standard and non-standard HTTP headers   |
| `CacheDirective` | `string`     | 16    | Cache-Control directive values           |
| `AuthScheme`     | `string`     | 3     | HTTP authentication schemes              |

All enums live under the `SineMacula\Http\Enums` namespace.

## Helper Methods

Each enum includes contextual helper methods:

- **HttpStatus** -- `isInformational()`, `isSuccess()`, `isRedirection()`, `isClientError()`, `isServerError()`,
  `getReasonPhrase()`
- **HttpMethod** -- `isSafe()`, `isIdempotent()`
- **MediaType** -- `isApplication()`, `isText()`, `isMultipart()`, `isImage()`, `isAudio()`, `isVideo()`, `isFont()`,
  `getExtension()`
- **HttpHeader** -- `isStandard()`
- **CacheDirective** -- `isRequestDirective()`, `isResponseDirective()`

## Installation

```bash
composer require sinemacula/http-primitives
```

## Usage

```php
use SineMacula\Http\Enums\HttpStatus;
use SineMacula\Http\Enums\HttpMethod;
use SineMacula\Http\Enums\MediaType;

// Status code helpers
$status = HttpStatus::from(404);
$status->isClientError();    // true
$status->getReasonPhrase();  // 'Not Found'

// Method safety checks
HttpMethod::Get->isSafe();       // true
HttpMethod::Post->isIdempotent(); // false

// Media type inspection
MediaType::ApplicationJson->isApplication(); // true
MediaType::ApplicationJson->getExtension();  // 'json'
```

## Testing

```bash
composer test
composer test-coverage
composer check
```

## Contributing

Contributions are welcome via GitHub pull requests.

## Security

If you discover a security issue, please contact Sine Macula directly rather than opening a public issue.

## License

Licensed under the [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).
