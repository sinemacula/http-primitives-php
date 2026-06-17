# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/), and this project adheres
to [Semantic Versioning](https://semver.org/).

## [2.0.1] - 2026-04-05

### Changed

- Centralised the coding standards and quality-gate tooling on the shared `sinemacula/coding-standards`
  source. No changes to the public enum API.

## [2.0.0] - 2026-03-15

### Added

- `Charset` enum covering common character encodings, with a `getEncoding()` accessor.
- Value accessors across the enums (`HttpStatus::getCode()`, `MediaType::getMimeType()`,
  `HttpHeader::getName()`, and similar) for retrieving the backing value through an explicit method.

### Changed

- **BREAKING:** Renamed every enum case to the `SCREAMING_SNAKE_CASE` convention for consistency.
  Code referencing the previous case names must be updated.

## [1.0.2] - 2026-03-14

### Added

- `MediaType::TEXT_EVENT_STREAM` (`text/event-stream`) for server-sent events.
- `HttpHeader::X_ACCEL_BUFFERING` (`X-Accel-Buffering`).

## [1.0.1] - 2026-03-13

### Fixed

- Corrected a typo in the README.

## [1.0.0] - 2026-03-13

Initial public release of `sinemacula/http-primitives-php` - a standalone, framework-agnostic package of
typed backed enums for HTTP protocol primitives with zero runtime dependencies.

### Added

- `HttpStatus`, `HttpMethod`, `MediaType`, `HttpHeader`, `CacheDirective`, and `AuthScheme` backed enums,
  each with contextual helper methods (status-range classification, reason phrases, method safety and
  idempotency checks, media-type category checks, and more).
- Full unit test coverage and a Symfony HttpFoundation parity check for `HttpStatus`.

[2.0.1]: https://github.com/sinemacula/http-primitives-php/compare/v2.0.0...v2.0.1
[2.0.0]: https://github.com/sinemacula/http-primitives-php/compare/v1.0.2...v2.0.0
[1.0.2]: https://github.com/sinemacula/http-primitives-php/compare/v1.0.1...v1.0.2
[1.0.1]: https://github.com/sinemacula/http-primitives-php/compare/v1.0.0...v1.0.1
[1.0.0]: https://github.com/sinemacula/http-primitives-php/releases/tag/v1.0.0
