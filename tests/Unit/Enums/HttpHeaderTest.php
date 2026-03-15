<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\HttpHeader;

/**
 * Tests for the HttpHeader enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(HttpHeader::class)]
class HttpHeaderTest extends TestCase
{
    /**
     * Test that HttpHeader has the expected number of cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(61, HttpHeader::cases());
    }

    /**
     * Provide each HttpHeader case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpHeader, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'Accept' => [HttpHeader::ACCEPT, 'Accept'];
        yield 'Accept-Charset' => [HttpHeader::ACCEPT_CHARSET, 'Accept-Charset'];
        yield 'Accept-Encoding' => [HttpHeader::ACCEPT_ENCODING, 'Accept-Encoding'];
        yield 'Accept-Language' => [HttpHeader::ACCEPT_LANGUAGE, 'Accept-Language'];
        yield 'Authorization' => [HttpHeader::AUTHORIZATION, 'Authorization'];
        yield 'Cache-Control' => [HttpHeader::CACHE_CONTROL, 'Cache-Control'];
        yield 'Connection' => [HttpHeader::CONNECTION, 'Connection'];
        yield 'Content-Length' => [HttpHeader::CONTENT_LENGTH, 'Content-Length'];
        yield 'Content-Type' => [HttpHeader::CONTENT_TYPE, 'Content-Type'];
        yield 'Cookie' => [HttpHeader::COOKIE, 'Cookie'];
        yield 'Expect' => [HttpHeader::EXPECT, 'Expect'];
        yield 'Forwarded' => [HttpHeader::FORWARDED, 'Forwarded'];
        yield 'Host' => [HttpHeader::HOST, 'Host'];
        yield 'If-Match' => [HttpHeader::IF_MATCH, 'If-Match'];
        yield 'If-Modified-Since' => [HttpHeader::IF_MODIFIED_SINCE, 'If-Modified-Since'];
        yield 'If-None-Match' => [HttpHeader::IF_NONE_MATCH, 'If-None-Match'];
        yield 'If-Range' => [HttpHeader::IF_RANGE, 'If-Range'];
        yield 'If-Unmodified-Since' => [HttpHeader::IF_UNMODIFIED_SINCE, 'If-Unmodified-Since'];
        yield 'Origin' => [HttpHeader::ORIGIN, 'Origin'];
        yield 'Range' => [HttpHeader::RANGE, 'Range'];
        yield 'Referer' => [HttpHeader::REFERER, 'Referer'];
        yield 'TE' => [HttpHeader::TE, 'TE'];
        yield 'User-Agent' => [HttpHeader::USER_AGENT, 'User-Agent'];
        yield 'Accept-Ranges' => [HttpHeader::ACCEPT_RANGES, 'Accept-Ranges'];
        yield 'Age' => [HttpHeader::AGE, 'Age'];
        yield 'Allow' => [HttpHeader::ALLOW, 'Allow'];
        yield 'Content-Disposition' => [HttpHeader::CONTENT_DISPOSITION, 'Content-Disposition'];
        yield 'Content-Encoding' => [HttpHeader::CONTENT_ENCODING, 'Content-Encoding'];
        yield 'Content-Language' => [HttpHeader::CONTENT_LANGUAGE, 'Content-Language'];
        yield 'Content-Location' => [HttpHeader::CONTENT_LOCATION, 'Content-Location'];
        yield 'Content-Range' => [HttpHeader::CONTENT_RANGE, 'Content-Range'];
        yield 'Date' => [HttpHeader::DATE, 'Date'];
        yield 'ETag' => [HttpHeader::ETAG, 'ETag'];
        yield 'Expires' => [HttpHeader::EXPIRES, 'Expires'];
        yield 'Last-Modified' => [HttpHeader::LAST_MODIFIED, 'Last-Modified'];
        yield 'Link' => [HttpHeader::LINK, 'Link'];
        yield 'Location' => [HttpHeader::LOCATION, 'Location'];
        yield 'Proxy-Authenticate' => [HttpHeader::PROXY_AUTHENTICATE, 'Proxy-Authenticate'];
        yield 'Retry-After' => [HttpHeader::RETRY_AFTER, 'Retry-After'];
        yield 'Server' => [HttpHeader::SERVER, 'Server'];
        yield 'Set-Cookie' => [HttpHeader::SET_COOKIE, 'Set-Cookie'];
        yield 'Vary' => [HttpHeader::VARY, 'Vary'];
        yield 'WWW-Authenticate' => [HttpHeader::WWW_AUTHENTICATE, 'WWW-Authenticate'];
        yield 'Access-Control-Allow-Credentials' => [HttpHeader::ACCESS_CONTROL_ALLOW_CREDENTIALS, 'Access-Control-Allow-Credentials'];
        yield 'Access-Control-Allow-Headers' => [HttpHeader::ACCESS_CONTROL_ALLOW_HEADERS, 'Access-Control-Allow-Headers'];
        yield 'Access-Control-Allow-Methods' => [HttpHeader::ACCESS_CONTROL_ALLOW_METHODS, 'Access-Control-Allow-Methods'];
        yield 'Access-Control-Allow-Origin' => [HttpHeader::ACCESS_CONTROL_ALLOW_ORIGIN, 'Access-Control-Allow-Origin'];
        yield 'Access-Control-Expose-Headers' => [HttpHeader::ACCESS_CONTROL_EXPOSE_HEADERS, 'Access-Control-Expose-Headers'];
        yield 'Access-Control-Max-Age' => [HttpHeader::ACCESS_CONTROL_MAX_AGE, 'Access-Control-Max-Age'];
        yield 'Access-Control-Request-Headers' => [HttpHeader::ACCESS_CONTROL_REQUEST_HEADERS, 'Access-Control-Request-Headers'];
        yield 'Access-Control-Request-Method' => [HttpHeader::ACCESS_CONTROL_REQUEST_METHOD, 'Access-Control-Request-Method'];
        yield 'Strict-Transport-Security' => [HttpHeader::STRICT_TRANSPORT_SECURITY, 'Strict-Transport-Security'];
        yield 'Content-Security-Policy' => [HttpHeader::CONTENT_SECURITY_POLICY, 'Content-Security-Policy'];
        yield 'X-Content-Type-Options' => [HttpHeader::X_CONTENT_TYPE_OPTIONS, 'X-Content-Type-Options'];
        yield 'X-Frame-Options' => [HttpHeader::X_FRAME_OPTIONS, 'X-Frame-Options'];
        yield 'X-Request-ID' => [HttpHeader::X_REQUEST_ID, 'X-Request-ID'];
        yield 'X-Forwarded-For' => [HttpHeader::X_FORWARDED_FOR, 'X-Forwarded-For'];
        yield 'X-Forwarded-Host' => [HttpHeader::X_FORWARDED_HOST, 'X-Forwarded-Host'];
        yield 'X-Forwarded-Proto' => [HttpHeader::X_FORWARDED_PROTO, 'X-Forwarded-Proto'];
        yield 'X-Correlation-ID' => [HttpHeader::X_CORRELATION_ID, 'X-Correlation-ID'];
        yield 'X-Accel-Buffering' => [HttpHeader::X_ACCEL_BUFFERING, 'X-Accel-Buffering'];
    }

    /**
     * Test that each case has the correct string backing value.
     *
     * @param  \SineMacula\Http\Enums\HttpHeader  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValueProvider')]
    public function testBackingValues(HttpHeader $case, string $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Provide each HttpHeader case with whether it is a standard header.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpHeader, 1: bool}>
     */
    public static function isStandardProvider(): iterable
    {
        yield 'ACCEPT is standard' => [HttpHeader::ACCEPT, true];
        yield 'ACCEPT_CHARSET is standard' => [HttpHeader::ACCEPT_CHARSET, true];
        yield 'ACCEPT_ENCODING is standard' => [HttpHeader::ACCEPT_ENCODING, true];
        yield 'ACCEPT_LANGUAGE is standard' => [HttpHeader::ACCEPT_LANGUAGE, true];
        yield 'AUTHORIZATION is standard' => [HttpHeader::AUTHORIZATION, true];
        yield 'CACHE_CONTROL is standard' => [HttpHeader::CACHE_CONTROL, true];
        yield 'CONNECTION is standard' => [HttpHeader::CONNECTION, true];
        yield 'CONTENT_LENGTH is standard' => [HttpHeader::CONTENT_LENGTH, true];
        yield 'CONTENT_TYPE is standard' => [HttpHeader::CONTENT_TYPE, true];
        yield 'COOKIE is standard' => [HttpHeader::COOKIE, true];
        yield 'EXPECT is standard' => [HttpHeader::EXPECT, true];
        yield 'FORWARDED is standard' => [HttpHeader::FORWARDED, true];
        yield 'HOST is standard' => [HttpHeader::HOST, true];
        yield 'IF_MATCH is standard' => [HttpHeader::IF_MATCH, true];
        yield 'IF_MODIFIED_SINCE is standard' => [HttpHeader::IF_MODIFIED_SINCE, true];
        yield 'IF_NONE_MATCH is standard' => [HttpHeader::IF_NONE_MATCH, true];
        yield 'IF_RANGE is standard' => [HttpHeader::IF_RANGE, true];
        yield 'IF_UNMODIFIED_SINCE is standard' => [HttpHeader::IF_UNMODIFIED_SINCE, true];
        yield 'ORIGIN is standard' => [HttpHeader::ORIGIN, true];
        yield 'RANGE is standard' => [HttpHeader::RANGE, true];
        yield 'REFERER is standard' => [HttpHeader::REFERER, true];
        yield 'TE is standard' => [HttpHeader::TE, true];
        yield 'USER_AGENT is standard' => [HttpHeader::USER_AGENT, true];
        yield 'ACCEPT_RANGES is standard' => [HttpHeader::ACCEPT_RANGES, true];
        yield 'AGE is standard' => [HttpHeader::AGE, true];
        yield 'ALLOW is standard' => [HttpHeader::ALLOW, true];
        yield 'CONTENT_DISPOSITION is standard' => [HttpHeader::CONTENT_DISPOSITION, true];
        yield 'CONTENT_ENCODING is standard' => [HttpHeader::CONTENT_ENCODING, true];
        yield 'CONTENT_LANGUAGE is standard' => [HttpHeader::CONTENT_LANGUAGE, true];
        yield 'CONTENT_LOCATION is standard' => [HttpHeader::CONTENT_LOCATION, true];
        yield 'CONTENT_RANGE is standard' => [HttpHeader::CONTENT_RANGE, true];
        yield 'DATE is standard' => [HttpHeader::DATE, true];
        yield 'ETAG is standard' => [HttpHeader::ETAG, true];
        yield 'EXPIRES is standard' => [HttpHeader::EXPIRES, true];
        yield 'LAST_MODIFIED is standard' => [HttpHeader::LAST_MODIFIED, true];
        yield 'LINK is standard' => [HttpHeader::LINK, true];
        yield 'LOCATION is standard' => [HttpHeader::LOCATION, true];
        yield 'PROXY_AUTHENTICATE is standard' => [HttpHeader::PROXY_AUTHENTICATE, true];
        yield 'RETRY_AFTER is standard' => [HttpHeader::RETRY_AFTER, true];
        yield 'SERVER is standard' => [HttpHeader::SERVER, true];
        yield 'SET_COOKIE is standard' => [HttpHeader::SET_COOKIE, true];
        yield 'VARY is standard' => [HttpHeader::VARY, true];
        yield 'WWW_AUTHENTICATE is standard' => [HttpHeader::WWW_AUTHENTICATE, true];
        yield 'ACCESS_CONTROL_ALLOW_CREDENTIALS is standard' => [HttpHeader::ACCESS_CONTROL_ALLOW_CREDENTIALS, true];
        yield 'ACCESS_CONTROL_ALLOW_HEADERS is standard' => [HttpHeader::ACCESS_CONTROL_ALLOW_HEADERS, true];
        yield 'ACCESS_CONTROL_ALLOW_METHODS is standard' => [HttpHeader::ACCESS_CONTROL_ALLOW_METHODS, true];
        yield 'ACCESS_CONTROL_ALLOW_ORIGIN is standard' => [HttpHeader::ACCESS_CONTROL_ALLOW_ORIGIN, true];
        yield 'ACCESS_CONTROL_EXPOSE_HEADERS is standard' => [HttpHeader::ACCESS_CONTROL_EXPOSE_HEADERS, true];
        yield 'ACCESS_CONTROL_MAX_AGE is standard' => [HttpHeader::ACCESS_CONTROL_MAX_AGE, true];
        yield 'ACCESS_CONTROL_REQUEST_HEADERS is standard' => [HttpHeader::ACCESS_CONTROL_REQUEST_HEADERS, true];
        yield 'ACCESS_CONTROL_REQUEST_METHOD is standard' => [HttpHeader::ACCESS_CONTROL_REQUEST_METHOD, true];
        yield 'STRICT_TRANSPORT_SECURITY is standard' => [HttpHeader::STRICT_TRANSPORT_SECURITY, true];
        yield 'CONTENT_SECURITY_POLICY is standard' => [HttpHeader::CONTENT_SECURITY_POLICY, true];
        yield 'X_CONTENT_TYPE_OPTIONS is non-standard' => [HttpHeader::X_CONTENT_TYPE_OPTIONS, false];
        yield 'X_FRAME_OPTIONS is standard' => [HttpHeader::X_FRAME_OPTIONS, true];
        yield 'X_REQUEST_ID is non-standard' => [HttpHeader::X_REQUEST_ID, false];
        yield 'X_FORWARDED_FOR is non-standard' => [HttpHeader::X_FORWARDED_FOR, false];
        yield 'X_FORWARDED_HOST is non-standard' => [HttpHeader::X_FORWARDED_HOST, false];
        yield 'X_FORWARDED_PROTO is non-standard' => [HttpHeader::X_FORWARDED_PROTO, false];
        yield 'X_CORRELATION_ID is non-standard' => [HttpHeader::X_CORRELATION_ID, false];
        yield 'X_ACCEL_BUFFERING is non-standard' => [HttpHeader::X_ACCEL_BUFFERING, false];
    }

    /**
     * Test that isStandard returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpHeader  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isStandardProvider')]
    public function testIsStandard(HttpHeader $case, bool $expected): void
    {
        static::assertSame($expected, $case->isStandard());
    }

    /**
     * Test that getName() returns the header name string.
     *
     * @return void
     */
    public function testGetName(): void
    {
        static::assertSame('Content-Type', HttpHeader::CONTENT_TYPE->getName());
        static::assertSame('Authorization', HttpHeader::AUTHORIZATION->getName());
        static::assertSame('X-Request-ID', HttpHeader::X_REQUEST_ID->getName());
    }

    /**
     * Test that tryFrom returns null for an unrecognised header value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(HttpHeader::tryFrom('X-Unknown-Header'));
    }
}
