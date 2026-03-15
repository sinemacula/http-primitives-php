<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\HttpStatus;

/**
 * Tests for the HttpStatus enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(HttpStatus::class)]
class HttpStatusTest extends TestCase
{
    /**
     * Test that the enum contains exactly 63 cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(63, HttpStatus::cases());
    }

    /**
     * Provide each HttpStatus case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: int}>
     */
    public static function backingValuesProvider(): iterable
    {
        yield 'CONTINUE (100)' => [HttpStatus::CONTINUE, 100];
        yield 'SWITCHING_PROTOCOLS (101)' => [HttpStatus::SWITCHING_PROTOCOLS, 101];
        yield 'PROCESSING (102)' => [HttpStatus::PROCESSING, 102];
        yield 'EARLY_HINTS (103)' => [HttpStatus::EARLY_HINTS, 103];
        yield 'OK (200)' => [HttpStatus::OK, 200];
        yield 'CREATED (201)' => [HttpStatus::CREATED, 201];
        yield 'ACCEPTED (202)' => [HttpStatus::ACCEPTED, 202];
        yield 'NON_AUTHORITATIVE_INFORMATION (203)' => [HttpStatus::NON_AUTHORITATIVE_INFORMATION, 203];
        yield 'NO_CONTENT (204)' => [HttpStatus::NO_CONTENT, 204];
        yield 'RESET_CONTENT (205)' => [HttpStatus::RESET_CONTENT, 205];
        yield 'PARTIAL_CONTENT (206)' => [HttpStatus::PARTIAL_CONTENT, 206];
        yield 'MULTI_STATUS (207)' => [HttpStatus::MULTI_STATUS, 207];
        yield 'ALREADY_REPORTED (208)' => [HttpStatus::ALREADY_REPORTED, 208];
        yield 'IM_USED (226)' => [HttpStatus::IM_USED, 226];
        yield 'MULTIPLE_CHOICES (300)' => [HttpStatus::MULTIPLE_CHOICES, 300];
        yield 'MOVED_PERMANENTLY (301)' => [HttpStatus::MOVED_PERMANENTLY, 301];
        yield 'FOUND (302)' => [HttpStatus::FOUND, 302];
        yield 'SEE_OTHER (303)' => [HttpStatus::SEE_OTHER, 303];
        yield 'NOT_MODIFIED (304)' => [HttpStatus::NOT_MODIFIED, 304];
        yield 'USE_PROXY (305)' => [HttpStatus::USE_PROXY, 305];
        yield 'UNUSED (306)' => [HttpStatus::UNUSED, 306];
        yield 'TEMPORARY_REDIRECT (307)' => [HttpStatus::TEMPORARY_REDIRECT, 307];
        yield 'PERMANENT_REDIRECT (308)' => [HttpStatus::PERMANENT_REDIRECT, 308];
        yield 'BAD_REQUEST (400)' => [HttpStatus::BAD_REQUEST, 400];
        yield 'UNAUTHORIZED (401)' => [HttpStatus::UNAUTHORIZED, 401];
        yield 'PAYMENT_REQUIRED (402)' => [HttpStatus::PAYMENT_REQUIRED, 402];
        yield 'FORBIDDEN (403)' => [HttpStatus::FORBIDDEN, 403];
        yield 'NOT_FOUND (404)' => [HttpStatus::NOT_FOUND, 404];
        yield 'METHOD_NOT_ALLOWED (405)' => [HttpStatus::METHOD_NOT_ALLOWED, 405];
        yield 'NOT_ACCEPTABLE (406)' => [HttpStatus::NOT_ACCEPTABLE, 406];
        yield 'PROXY_AUTHENTICATION_REQUIRED (407)' => [HttpStatus::PROXY_AUTHENTICATION_REQUIRED, 407];
        yield 'REQUEST_TIMEOUT (408)' => [HttpStatus::REQUEST_TIMEOUT, 408];
        yield 'CONFLICT (409)' => [HttpStatus::CONFLICT, 409];
        yield 'GONE (410)' => [HttpStatus::GONE, 410];
        yield 'LENGTH_REQUIRED (411)' => [HttpStatus::LENGTH_REQUIRED, 411];
        yield 'PRECONDITION_FAILED (412)' => [HttpStatus::PRECONDITION_FAILED, 412];
        yield 'CONTENT_TOO_LARGE (413)' => [HttpStatus::CONTENT_TOO_LARGE, 413];
        yield 'URI_TOO_LONG (414)' => [HttpStatus::URI_TOO_LONG, 414];
        yield 'UNSUPPORTED_MEDIA_TYPE (415)' => [HttpStatus::UNSUPPORTED_MEDIA_TYPE, 415];
        yield 'RANGE_NOT_SATISFIABLE (416)' => [HttpStatus::RANGE_NOT_SATISFIABLE, 416];
        yield 'EXPECTATION_FAILED (417)' => [HttpStatus::EXPECTATION_FAILED, 417];
        yield 'IM_A_TEAPOT (418)' => [HttpStatus::IM_A_TEAPOT, 418];
        yield 'MISDIRECTED_REQUEST (421)' => [HttpStatus::MISDIRECTED_REQUEST, 421];
        yield 'UNPROCESSABLE_CONTENT (422)' => [HttpStatus::UNPROCESSABLE_CONTENT, 422];
        yield 'LOCKED (423)' => [HttpStatus::LOCKED, 423];
        yield 'FAILED_DEPENDENCY (424)' => [HttpStatus::FAILED_DEPENDENCY, 424];
        yield 'TOO_EARLY (425)' => [HttpStatus::TOO_EARLY, 425];
        yield 'UPGRADE_REQUIRED (426)' => [HttpStatus::UPGRADE_REQUIRED, 426];
        yield 'PRECONDITION_REQUIRED (428)' => [HttpStatus::PRECONDITION_REQUIRED, 428];
        yield 'TOO_MANY_REQUESTS (429)' => [HttpStatus::TOO_MANY_REQUESTS, 429];
        yield 'REQUEST_HEADER_FIELDS_TOO_LARGE (431)' => [HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE, 431];
        yield 'UNAVAILABLE_FOR_LEGAL_REASONS (451)' => [HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS, 451];
        yield 'INTERNAL_SERVER_ERROR (500)' => [HttpStatus::INTERNAL_SERVER_ERROR, 500];
        yield 'NOT_IMPLEMENTED (501)' => [HttpStatus::NOT_IMPLEMENTED, 501];
        yield 'BAD_GATEWAY (502)' => [HttpStatus::BAD_GATEWAY, 502];
        yield 'SERVICE_UNAVAILABLE (503)' => [HttpStatus::SERVICE_UNAVAILABLE, 503];
        yield 'GATEWAY_TIMEOUT (504)' => [HttpStatus::GATEWAY_TIMEOUT, 504];
        yield 'HTTP_VERSION_NOT_SUPPORTED (505)' => [HttpStatus::HTTP_VERSION_NOT_SUPPORTED, 505];
        yield 'VARIANT_ALSO_NEGOTIATES (506)' => [HttpStatus::VARIANT_ALSO_NEGOTIATES, 506];
        yield 'INSUFFICIENT_STORAGE (507)' => [HttpStatus::INSUFFICIENT_STORAGE, 507];
        yield 'LOOP_DETECTED (508)' => [HttpStatus::LOOP_DETECTED, 508];
        yield 'NOT_EXTENDED (510)' => [HttpStatus::NOT_EXTENDED, 510];
        yield 'NETWORK_AUTHENTICATION_REQUIRED (511)' => [HttpStatus::NETWORK_AUTHENTICATION_REQUIRED, 511];
    }

    /**
     * Test that each case has the correct integer backing value.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  int  $expectedValue
     * @return void
     */
    #[DataProvider('backingValuesProvider')]
    public function testBackingValues(HttpStatus $case, int $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Provide each HttpStatus case with its expected informational status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: bool}>
     */
    public static function informationalProvider(): iterable
    {
        foreach (HttpStatus::cases() as $case) {
            yield $case->name . ' (' . $case->value . ')' => [
                $case,
                $case->value >= 100 && $case->value < 200,
            ];
        }
    }

    /**
     * Test that isInformational returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('informationalProvider')]
    public function testIsInformational(HttpStatus $case, bool $expected): void
    {
        static::assertSame($expected, $case->isInformational());
    }

    /**
     * Provide each HttpStatus case with its expected success status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: bool}>
     */
    public static function successProvider(): iterable
    {
        foreach (HttpStatus::cases() as $case) {
            yield $case->name . ' (' . $case->value . ')' => [
                $case,
                $case->value >= 200 && $case->value < 300,
            ];
        }
    }

    /**
     * Test that isSuccess returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('successProvider')]
    public function testIsSuccess(HttpStatus $case, bool $expected): void
    {
        static::assertSame($expected, $case->isSuccess());
    }

    /**
     * Provide each HttpStatus case with its expected redirection status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: bool}>
     */
    public static function redirectionProvider(): iterable
    {
        foreach (HttpStatus::cases() as $case) {
            yield $case->name . ' (' . $case->value . ')' => [
                $case,
                $case->value >= 300 && $case->value < 400,
            ];
        }
    }

    /**
     * Test that isRedirection returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('redirectionProvider')]
    public function testIsRedirection(HttpStatus $case, bool $expected): void
    {
        static::assertSame($expected, $case->isRedirection());
    }

    /**
     * Provide each HttpStatus case with its expected client error status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: bool}>
     */
    public static function clientErrorProvider(): iterable
    {
        foreach (HttpStatus::cases() as $case) {
            yield $case->name . ' (' . $case->value . ')' => [
                $case,
                $case->value >= 400 && $case->value < 500,
            ];
        }
    }

    /**
     * Test that isClientError returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('clientErrorProvider')]
    public function testIsClientError(HttpStatus $case, bool $expected): void
    {
        static::assertSame($expected, $case->isClientError());
    }

    /**
     * Provide each HttpStatus case with its expected server error status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: bool}>
     */
    public static function serverErrorProvider(): iterable
    {
        foreach (HttpStatus::cases() as $case) {
            yield $case->name . ' (' . $case->value . ')' => [
                $case,
                $case->value >= 500 && $case->value < 600,
            ];
        }
    }

    /**
     * Test that isServerError returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('serverErrorProvider')]
    public function testIsServerError(HttpStatus $case, bool $expected): void
    {
        static::assertSame($expected, $case->isServerError());
    }

    /**
     * Provide each HttpStatus case with its expected reason phrase.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: string}>
     */
    public static function reasonPhraseProvider(): iterable
    {
        yield 'CONTINUE (100)' => [HttpStatus::CONTINUE, 'Continue'];
        yield 'SWITCHING_PROTOCOLS (101)' => [HttpStatus::SWITCHING_PROTOCOLS, 'Switching Protocols'];
        yield 'PROCESSING (102)' => [HttpStatus::PROCESSING, 'Processing'];
        yield 'EARLY_HINTS (103)' => [HttpStatus::EARLY_HINTS, 'Early Hints'];
        yield 'OK (200)' => [HttpStatus::OK, 'OK'];
        yield 'CREATED (201)' => [HttpStatus::CREATED, 'Created'];
        yield 'ACCEPTED (202)' => [HttpStatus::ACCEPTED, 'Accepted'];
        yield 'NON_AUTHORITATIVE_INFORMATION (203)' => [
            HttpStatus::NON_AUTHORITATIVE_INFORMATION,
            'Non-Authoritative Information',
        ];
        yield 'NO_CONTENT (204)' => [HttpStatus::NO_CONTENT, 'No Content'];
        yield 'RESET_CONTENT (205)' => [HttpStatus::RESET_CONTENT, 'Reset Content'];
        yield 'PARTIAL_CONTENT (206)' => [HttpStatus::PARTIAL_CONTENT, 'Partial Content'];
        yield 'MULTI_STATUS (207)' => [HttpStatus::MULTI_STATUS, 'Multi-Status'];
        yield 'ALREADY_REPORTED (208)' => [HttpStatus::ALREADY_REPORTED, 'Already Reported'];
        yield 'IM_USED (226)' => [HttpStatus::IM_USED, 'IM Used'];
        yield 'MULTIPLE_CHOICES (300)' => [HttpStatus::MULTIPLE_CHOICES, 'Multiple Choices'];
        yield 'MOVED_PERMANENTLY (301)' => [HttpStatus::MOVED_PERMANENTLY, 'Moved Permanently'];
        yield 'FOUND (302)' => [HttpStatus::FOUND, 'Found'];
        yield 'SEE_OTHER (303)' => [HttpStatus::SEE_OTHER, 'See Other'];
        yield 'NOT_MODIFIED (304)' => [HttpStatus::NOT_MODIFIED, 'Not Modified'];
        yield 'USE_PROXY (305)' => [HttpStatus::USE_PROXY, 'Use Proxy'];
        yield 'UNUSED (306)' => [HttpStatus::UNUSED, 'unused'];
        yield 'TEMPORARY_REDIRECT (307)' => [HttpStatus::TEMPORARY_REDIRECT, 'Temporary Redirect'];
        yield 'PERMANENT_REDIRECT (308)' => [HttpStatus::PERMANENT_REDIRECT, 'Permanent Redirect'];
        yield 'BAD_REQUEST (400)' => [HttpStatus::BAD_REQUEST, 'Bad Request'];
        yield 'UNAUTHORIZED (401)' => [HttpStatus::UNAUTHORIZED, 'Unauthorized'];
        yield 'PAYMENT_REQUIRED (402)' => [HttpStatus::PAYMENT_REQUIRED, 'Payment Required'];
        yield 'FORBIDDEN (403)' => [HttpStatus::FORBIDDEN, 'Forbidden'];
        yield 'NOT_FOUND (404)' => [HttpStatus::NOT_FOUND, 'Not Found'];
        yield 'METHOD_NOT_ALLOWED (405)' => [HttpStatus::METHOD_NOT_ALLOWED, 'Method Not Allowed'];
        yield 'NOT_ACCEPTABLE (406)' => [HttpStatus::NOT_ACCEPTABLE, 'Not Acceptable'];
        yield 'PROXY_AUTHENTICATION_REQUIRED (407)' => [
            HttpStatus::PROXY_AUTHENTICATION_REQUIRED,
            'Proxy Authentication Required',
        ];
        yield 'REQUEST_TIMEOUT (408)' => [HttpStatus::REQUEST_TIMEOUT, 'Request Timeout'];
        yield 'CONFLICT (409)' => [HttpStatus::CONFLICT, 'Conflict'];
        yield 'GONE (410)' => [HttpStatus::GONE, 'Gone'];
        yield 'LENGTH_REQUIRED (411)' => [HttpStatus::LENGTH_REQUIRED, 'Length Required'];
        yield 'PRECONDITION_FAILED (412)' => [HttpStatus::PRECONDITION_FAILED, 'Precondition Failed'];
        yield 'CONTENT_TOO_LARGE (413)' => [HttpStatus::CONTENT_TOO_LARGE, 'Content Too Large'];
        yield 'URI_TOO_LONG (414)' => [HttpStatus::URI_TOO_LONG, 'URI Too Long'];
        yield 'UNSUPPORTED_MEDIA_TYPE (415)' => [HttpStatus::UNSUPPORTED_MEDIA_TYPE, 'Unsupported Media Type'];
        yield 'RANGE_NOT_SATISFIABLE (416)' => [HttpStatus::RANGE_NOT_SATISFIABLE, 'Range Not Satisfiable'];
        yield 'EXPECTATION_FAILED (417)' => [HttpStatus::EXPECTATION_FAILED, 'Expectation Failed'];
        yield 'IM_A_TEAPOT (418)' => [HttpStatus::IM_A_TEAPOT, 'I\'m a Teapot'];
        yield 'MISDIRECTED_REQUEST (421)' => [HttpStatus::MISDIRECTED_REQUEST, 'Misdirected Request'];
        yield 'UNPROCESSABLE_CONTENT (422)' => [HttpStatus::UNPROCESSABLE_CONTENT, 'Unprocessable Content'];
        yield 'LOCKED (423)' => [HttpStatus::LOCKED, 'Locked'];
        yield 'FAILED_DEPENDENCY (424)' => [HttpStatus::FAILED_DEPENDENCY, 'Failed Dependency'];
        yield 'TOO_EARLY (425)' => [HttpStatus::TOO_EARLY, 'Too Early'];
        yield 'UPGRADE_REQUIRED (426)' => [HttpStatus::UPGRADE_REQUIRED, 'Upgrade Required'];
        yield 'PRECONDITION_REQUIRED (428)' => [HttpStatus::PRECONDITION_REQUIRED, 'Precondition Required'];
        yield 'TOO_MANY_REQUESTS (429)' => [HttpStatus::TOO_MANY_REQUESTS, 'Too Many Requests'];
        yield 'REQUEST_HEADER_FIELDS_TOO_LARGE (431)' => [
            HttpStatus::REQUEST_HEADER_FIELDS_TOO_LARGE,
            'Request Header Fields Too Large',
        ];
        yield 'UNAVAILABLE_FOR_LEGAL_REASONS (451)' => [
            HttpStatus::UNAVAILABLE_FOR_LEGAL_REASONS,
            'Unavailable For Legal Reasons',
        ];
        yield 'INTERNAL_SERVER_ERROR (500)' => [HttpStatus::INTERNAL_SERVER_ERROR, 'Internal Server Error'];
        yield 'NOT_IMPLEMENTED (501)' => [HttpStatus::NOT_IMPLEMENTED, 'Not Implemented'];
        yield 'BAD_GATEWAY (502)' => [HttpStatus::BAD_GATEWAY, 'Bad Gateway'];
        yield 'SERVICE_UNAVAILABLE (503)' => [HttpStatus::SERVICE_UNAVAILABLE, 'Service Unavailable'];
        yield 'GATEWAY_TIMEOUT (504)' => [HttpStatus::GATEWAY_TIMEOUT, 'Gateway Timeout'];
        yield 'HTTP_VERSION_NOT_SUPPORTED (505)' => [
            HttpStatus::HTTP_VERSION_NOT_SUPPORTED,
            'HTTP Version Not Supported',
        ];
        yield 'VARIANT_ALSO_NEGOTIATES (506)' => [HttpStatus::VARIANT_ALSO_NEGOTIATES, 'Variant Also Negotiates'];
        yield 'INSUFFICIENT_STORAGE (507)' => [HttpStatus::INSUFFICIENT_STORAGE, 'Insufficient Storage'];
        yield 'LOOP_DETECTED (508)' => [HttpStatus::LOOP_DETECTED, 'Loop Detected'];
        yield 'NOT_EXTENDED (510)' => [HttpStatus::NOT_EXTENDED, 'Not Extended'];
        yield 'NETWORK_AUTHENTICATION_REQUIRED (511)' => [
            HttpStatus::NETWORK_AUTHENTICATION_REQUIRED,
            'Network Authentication Required',
        ];
    }

    /**
     * Test that getReasonPhrase returns the correct phrase for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpStatus  $case
     * @param  string  $expectedPhrase
     * @return void
     */
    #[DataProvider('reasonPhraseProvider')]
    public function testGetReasonPhrase(HttpStatus $case, string $expectedPhrase): void
    {
        static::assertSame($expectedPhrase, $case->getReasonPhrase());
    }

    /**
     * Test that getCode() returns the numeric status code.
     *
     * @return void
     */
    public function testGetCode(): void
    {
        static::assertSame(200, HttpStatus::OK->getCode());
        static::assertSame(404, HttpStatus::NOT_FOUND->getCode());
        static::assertSame(500, HttpStatus::INTERNAL_SERVER_ERROR->getCode());
    }

    /**
     * Test that getStatusLine() returns the full status line.
     *
     * @return void
     */
    public function testGetStatusLine(): void
    {
        static::assertSame('200 OK', HttpStatus::OK->getStatusLine());
        static::assertSame('404 Not Found', HttpStatus::NOT_FOUND->getStatusLine());
        static::assertSame('500 Internal Server Error', HttpStatus::INTERNAL_SERVER_ERROR->getStatusLine());
        static::assertSame('418 I\'m a Teapot', HttpStatus::IM_A_TEAPOT->getStatusLine());
    }

    /**
     * Test that from() returns the correct case for known values.
     *
     * @return void
     */
    public function testFromValueRoundTrip(): void
    {
        static::assertSame(HttpStatus::OK, HttpStatus::from(200));
        static::assertSame(HttpStatus::NOT_FOUND, HttpStatus::from(404));
        static::assertSame(HttpStatus::INTERNAL_SERVER_ERROR, HttpStatus::from(500));
        static::assertSame(HttpStatus::CONTINUE, HttpStatus::from(100));
        static::assertSame(HttpStatus::MOVED_PERMANENTLY, HttpStatus::from(301));
        static::assertSame(HttpStatus::IM_A_TEAPOT, HttpStatus::from(418));
    }

    /**
     * Test that tryFrom() returns null for an unknown value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(HttpStatus::tryFrom(999));
    }
}
