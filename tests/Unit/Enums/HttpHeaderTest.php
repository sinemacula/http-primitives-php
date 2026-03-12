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
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(60, HttpHeader::cases());
    }

    /**
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpHeader, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'Accept' => [HttpHeader::Accept, 'Accept'];
        yield 'Accept-Charset' => [HttpHeader::AcceptCharset, 'Accept-Charset'];
        yield 'Accept-Encoding' => [HttpHeader::AcceptEncoding, 'Accept-Encoding'];
        yield 'Accept-Language' => [HttpHeader::AcceptLanguage, 'Accept-Language'];
        yield 'Authorization' => [HttpHeader::Authorization, 'Authorization'];
        yield 'Cache-Control' => [HttpHeader::CacheControl, 'Cache-Control'];
        yield 'Connection' => [HttpHeader::Connection, 'Connection'];
        yield 'Content-Length' => [HttpHeader::ContentLength, 'Content-Length'];
        yield 'Content-Type' => [HttpHeader::ContentType, 'Content-Type'];
        yield 'Cookie' => [HttpHeader::Cookie, 'Cookie'];
        yield 'Expect' => [HttpHeader::Expect, 'Expect'];
        yield 'Forwarded' => [HttpHeader::Forwarded, 'Forwarded'];
        yield 'Host' => [HttpHeader::Host, 'Host'];
        yield 'If-Match' => [HttpHeader::IfMatch, 'If-Match'];
        yield 'If-Modified-Since' => [HttpHeader::IfModifiedSince, 'If-Modified-Since'];
        yield 'If-None-Match' => [HttpHeader::IfNoneMatch, 'If-None-Match'];
        yield 'If-Range' => [HttpHeader::IfRange, 'If-Range'];
        yield 'If-Unmodified-Since' => [HttpHeader::IfUnmodifiedSince, 'If-Unmodified-Since'];
        yield 'Origin' => [HttpHeader::Origin, 'Origin'];
        yield 'Range' => [HttpHeader::Range, 'Range'];
        yield 'Referer' => [HttpHeader::Referer, 'Referer'];
        yield 'TE' => [HttpHeader::Te, 'TE'];
        yield 'User-Agent' => [HttpHeader::UserAgent, 'User-Agent'];
        yield 'Accept-Ranges' => [HttpHeader::AcceptRanges, 'Accept-Ranges'];
        yield 'Age' => [HttpHeader::Age, 'Age'];
        yield 'Allow' => [HttpHeader::Allow, 'Allow'];
        yield 'Content-Disposition' => [HttpHeader::ContentDisposition, 'Content-Disposition'];
        yield 'Content-Encoding' => [HttpHeader::ContentEncoding, 'Content-Encoding'];
        yield 'Content-Language' => [HttpHeader::ContentLanguage, 'Content-Language'];
        yield 'Content-Location' => [HttpHeader::ContentLocation, 'Content-Location'];
        yield 'Content-Range' => [HttpHeader::ContentRange, 'Content-Range'];
        yield 'Date' => [HttpHeader::Date, 'Date'];
        yield 'ETag' => [HttpHeader::Etag, 'ETag'];
        yield 'Expires' => [HttpHeader::Expires, 'Expires'];
        yield 'Last-Modified' => [HttpHeader::LastModified, 'Last-Modified'];
        yield 'Link' => [HttpHeader::Link, 'Link'];
        yield 'Location' => [HttpHeader::Location, 'Location'];
        yield 'Proxy-Authenticate' => [HttpHeader::ProxyAuthenticate, 'Proxy-Authenticate'];
        yield 'Retry-After' => [HttpHeader::RetryAfter, 'Retry-After'];
        yield 'Server' => [HttpHeader::Server, 'Server'];
        yield 'Set-Cookie' => [HttpHeader::SetCookie, 'Set-Cookie'];
        yield 'Vary' => [HttpHeader::Vary, 'Vary'];
        yield 'WWW-Authenticate' => [HttpHeader::WwwAuthenticate, 'WWW-Authenticate'];
        yield 'Access-Control-Allow-Credentials' => [HttpHeader::AccessControlAllowCredentials, 'Access-Control-Allow-Credentials'];
        yield 'Access-Control-Allow-Headers' => [HttpHeader::AccessControlAllowHeaders, 'Access-Control-Allow-Headers'];
        yield 'Access-Control-Allow-Methods' => [HttpHeader::AccessControlAllowMethods, 'Access-Control-Allow-Methods'];
        yield 'Access-Control-Allow-Origin' => [HttpHeader::AccessControlAllowOrigin, 'Access-Control-Allow-Origin'];
        yield 'Access-Control-Expose-Headers' => [HttpHeader::AccessControlExposeHeaders, 'Access-Control-Expose-Headers'];
        yield 'Access-Control-Max-Age' => [HttpHeader::AccessControlMaxAge, 'Access-Control-Max-Age'];
        yield 'Access-Control-Request-Headers' => [HttpHeader::AccessControlRequestHeaders, 'Access-Control-Request-Headers'];
        yield 'Access-Control-Request-Method' => [HttpHeader::AccessControlRequestMethod, 'Access-Control-Request-Method'];
        yield 'Strict-Transport-Security' => [HttpHeader::StrictTransportSecurity, 'Strict-Transport-Security'];
        yield 'Content-Security-Policy' => [HttpHeader::ContentSecurityPolicy, 'Content-Security-Policy'];
        yield 'X-Content-Type-Options' => [HttpHeader::XContentTypeOptions, 'X-Content-Type-Options'];
        yield 'X-Frame-Options' => [HttpHeader::XFrameOptions, 'X-Frame-Options'];
        yield 'X-Request-ID' => [HttpHeader::XRequestId, 'X-Request-ID'];
        yield 'X-Forwarded-For' => [HttpHeader::XForwardedFor, 'X-Forwarded-For'];
        yield 'X-Forwarded-Host' => [HttpHeader::XForwardedHost, 'X-Forwarded-Host'];
        yield 'X-Forwarded-Proto' => [HttpHeader::XForwardedProto, 'X-Forwarded-Proto'];
        yield 'X-Correlation-ID' => [HttpHeader::XCorrelationId, 'X-Correlation-ID'];
    }

    /**
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
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpHeader, 1: bool}>
     */
    public static function isStandardProvider(): iterable
    {
        yield 'Accept is standard' => [HttpHeader::Accept, true];
        yield 'AcceptCharset is standard' => [HttpHeader::AcceptCharset, true];
        yield 'AcceptEncoding is standard' => [HttpHeader::AcceptEncoding, true];
        yield 'AcceptLanguage is standard' => [HttpHeader::AcceptLanguage, true];
        yield 'Authorization is standard' => [HttpHeader::Authorization, true];
        yield 'CacheControl is standard' => [HttpHeader::CacheControl, true];
        yield 'Connection is standard' => [HttpHeader::Connection, true];
        yield 'ContentLength is standard' => [HttpHeader::ContentLength, true];
        yield 'ContentType is standard' => [HttpHeader::ContentType, true];
        yield 'Cookie is standard' => [HttpHeader::Cookie, true];
        yield 'Expect is standard' => [HttpHeader::Expect, true];
        yield 'Forwarded is standard' => [HttpHeader::Forwarded, true];
        yield 'Host is standard' => [HttpHeader::Host, true];
        yield 'IfMatch is standard' => [HttpHeader::IfMatch, true];
        yield 'IfModifiedSince is standard' => [HttpHeader::IfModifiedSince, true];
        yield 'IfNoneMatch is standard' => [HttpHeader::IfNoneMatch, true];
        yield 'IfRange is standard' => [HttpHeader::IfRange, true];
        yield 'IfUnmodifiedSince is standard' => [HttpHeader::IfUnmodifiedSince, true];
        yield 'Origin is standard' => [HttpHeader::Origin, true];
        yield 'Range is standard' => [HttpHeader::Range, true];
        yield 'Referer is standard' => [HttpHeader::Referer, true];
        yield 'Te is standard' => [HttpHeader::Te, true];
        yield 'UserAgent is standard' => [HttpHeader::UserAgent, true];
        yield 'AcceptRanges is standard' => [HttpHeader::AcceptRanges, true];
        yield 'Age is standard' => [HttpHeader::Age, true];
        yield 'Allow is standard' => [HttpHeader::Allow, true];
        yield 'ContentDisposition is standard' => [HttpHeader::ContentDisposition, true];
        yield 'ContentEncoding is standard' => [HttpHeader::ContentEncoding, true];
        yield 'ContentLanguage is standard' => [HttpHeader::ContentLanguage, true];
        yield 'ContentLocation is standard' => [HttpHeader::ContentLocation, true];
        yield 'ContentRange is standard' => [HttpHeader::ContentRange, true];
        yield 'Date is standard' => [HttpHeader::Date, true];
        yield 'Etag is standard' => [HttpHeader::Etag, true];
        yield 'Expires is standard' => [HttpHeader::Expires, true];
        yield 'LastModified is standard' => [HttpHeader::LastModified, true];
        yield 'Link is standard' => [HttpHeader::Link, true];
        yield 'Location is standard' => [HttpHeader::Location, true];
        yield 'ProxyAuthenticate is standard' => [HttpHeader::ProxyAuthenticate, true];
        yield 'RetryAfter is standard' => [HttpHeader::RetryAfter, true];
        yield 'Server is standard' => [HttpHeader::Server, true];
        yield 'SetCookie is standard' => [HttpHeader::SetCookie, true];
        yield 'Vary is standard' => [HttpHeader::Vary, true];
        yield 'WwwAuthenticate is standard' => [HttpHeader::WwwAuthenticate, true];
        yield 'AccessControlAllowCredentials is standard' => [HttpHeader::AccessControlAllowCredentials, true];
        yield 'AccessControlAllowHeaders is standard' => [HttpHeader::AccessControlAllowHeaders, true];
        yield 'AccessControlAllowMethods is standard' => [HttpHeader::AccessControlAllowMethods, true];
        yield 'AccessControlAllowOrigin is standard' => [HttpHeader::AccessControlAllowOrigin, true];
        yield 'AccessControlExposeHeaders is standard' => [HttpHeader::AccessControlExposeHeaders, true];
        yield 'AccessControlMaxAge is standard' => [HttpHeader::AccessControlMaxAge, true];
        yield 'AccessControlRequestHeaders is standard' => [HttpHeader::AccessControlRequestHeaders, true];
        yield 'AccessControlRequestMethod is standard' => [HttpHeader::AccessControlRequestMethod, true];
        yield 'StrictTransportSecurity is standard' => [HttpHeader::StrictTransportSecurity, true];
        yield 'ContentSecurityPolicy is standard' => [HttpHeader::ContentSecurityPolicy, true];
        yield 'XContentTypeOptions is non-standard' => [HttpHeader::XContentTypeOptions, false];
        yield 'XFrameOptions is non-standard' => [HttpHeader::XFrameOptions, false];
        yield 'XRequestId is non-standard' => [HttpHeader::XRequestId, false];
        yield 'XForwardedFor is non-standard' => [HttpHeader::XForwardedFor, false];
        yield 'XForwardedHost is non-standard' => [HttpHeader::XForwardedHost, false];
        yield 'XForwardedProto is non-standard' => [HttpHeader::XForwardedProto, false];
        yield 'XCorrelationId is non-standard' => [HttpHeader::XCorrelationId, false];
    }

    /**
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
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(HttpHeader::tryFrom('X-Unknown-Header'));
    }
}
