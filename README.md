# HTTP Primitives

[![Latest Stable Version](https://img.shields.io/packagist/v/sinemacula/http-primitives-php.svg)](https://packagist.org/packages/sinemacula/http-primitives-php)
[![Build Status](https://github.com/sinemacula/http-primitives-php/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/sinemacula/http-primitives-php/actions/workflows/tests.yml)
[![Maintainability](https://qlty.sh/gh/sinemacula/projects/http-primitives-php/maintainability.svg)](https://qlty.sh/gh/sinemacula/projects/http-primitives-php)
[![Code Coverage](https://qlty.sh/gh/sinemacula/projects/http-primitives-php/coverage.svg)](https://qlty.sh/gh/sinemacula/projects/http-primitives-php)
[![Total Downloads](https://img.shields.io/packagist/dt/sinemacula/http-primitives-php.svg)](https://packagist.org/packages/sinemacula/http-primitives-php)

Standalone, framework-agnostic PHP 8.3+ package providing typed backed enums for HTTP protocol primitives. Zero runtime
dependencies.

## Enums

| Enum             | Backing Type | Cases | Description                              |
|------------------|--------------|-------|------------------------------------------|
| `HttpStatus`     | `int`        | 63    | All standard HTTP status codes (1xx-5xx) |
| `HttpMethod`     | `string`     | 9     | HTTP request methods per RFC 9110        |
| `MediaType`      | `string`     | 43    | Common MIME types across 7 categories    |
| `HttpHeader`     | `string`     | 61    | Standard and non-standard HTTP headers   |
| `CacheDirective` | `string`     | 16    | Cache-Control directive values           |
| `AuthScheme`     | `string`     | 3     | HTTP authentication schemes              |
| `Charset`        | `string`     | 20    | Common character encodings               |

All enums live under the `SineMacula\Http\Enums` namespace.

## Helper Methods

Each enum includes contextual helper methods:

- **HttpStatus** -- `getCode()`, `getStatusLine()`, `getReasonPhrase()`, `isInformational()`, `isSuccess()`,
  `isRedirection()`, `isClientError()`, `isServerError()`
- **HttpMethod** -- `getVerb()`, `isSafe()`, `isIdempotent()`
- **MediaType** -- `getMimeType()`, `withCharset()`, `getExtension()`, `isApplication()`, `isText()`,
  `isMultipart()`, `isImage()`, `isAudio()`, `isVideo()`, `isFont()`
- **HttpHeader** -- `getName()`, `isStandard()`
- **CacheDirective** -- `isRequestDirective()`, `isResponseDirective()`
- **Charset** -- `getEncoding()`

## Installation

```bash
composer require sinemacula/http-primitives-php
```

## Usage

```php
use SineMacula\Http\Enums\Charset;
use SineMacula\Http\Enums\HttpStatus;
use SineMacula\Http\Enums\HttpMethod;
use SineMacula\Http\Enums\MediaType;

// Status code helpers
$status = HttpStatus::from(404);
$status->getCode();          // 404
$status->getStatusLine();    // '404 Not Found'
$status->isClientError();    // true
$status->getReasonPhrase();  // 'Not Found'

// Method safety checks
HttpMethod::GET->isSafe();        // true
HttpMethod::POST->isIdempotent(); // false

// Media type inspection
MediaType::APPLICATION_JSON->isApplication(); // true
MediaType::APPLICATION_JSON->getExtension();  // 'json'

// Content type composition
MediaType::TEXT_CSV->withCharset(Charset::UTF_8); // 'text/csv; charset=utf-8'
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
