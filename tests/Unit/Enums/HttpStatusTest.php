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
     * Provide each HttpStatus case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: int}>
     */
    public static function backingValuesProvider(): iterable
    {
        yield 'Continue (100)' => [HttpStatus::Continue, 100];
        yield 'SwitchingProtocols (101)' => [HttpStatus::SwitchingProtocols, 101];
        yield 'Processing (102)' => [HttpStatus::Processing, 102];
        yield 'EarlyHints (103)' => [HttpStatus::EarlyHints, 103];
        yield 'Ok (200)' => [HttpStatus::Ok, 200];
        yield 'Created (201)' => [HttpStatus::Created, 201];
        yield 'Accepted (202)' => [HttpStatus::Accepted, 202];
        yield 'NonAuthoritativeInformation (203)' => [HttpStatus::NonAuthoritativeInformation, 203];
        yield 'NoContent (204)' => [HttpStatus::NoContent, 204];
        yield 'ResetContent (205)' => [HttpStatus::ResetContent, 205];
        yield 'PartialContent (206)' => [HttpStatus::PartialContent, 206];
        yield 'MultiStatus (207)' => [HttpStatus::MultiStatus, 207];
        yield 'AlreadyReported (208)' => [HttpStatus::AlreadyReported, 208];
        yield 'ImUsed (226)' => [HttpStatus::ImUsed, 226];
        yield 'MultipleChoices (300)' => [HttpStatus::MultipleChoices, 300];
        yield 'MovedPermanently (301)' => [HttpStatus::MovedPermanently, 301];
        yield 'Found (302)' => [HttpStatus::Found, 302];
        yield 'SeeOther (303)' => [HttpStatus::SeeOther, 303];
        yield 'NotModified (304)' => [HttpStatus::NotModified, 304];
        yield 'UseProxy (305)' => [HttpStatus::UseProxy, 305];
        yield 'Unused (306)' => [HttpStatus::Unused, 306];
        yield 'TemporaryRedirect (307)' => [HttpStatus::TemporaryRedirect, 307];
        yield 'PermanentRedirect (308)' => [HttpStatus::PermanentRedirect, 308];
        yield 'BadRequest (400)' => [HttpStatus::BadRequest, 400];
        yield 'Unauthorized (401)' => [HttpStatus::Unauthorized, 401];
        yield 'PaymentRequired (402)' => [HttpStatus::PaymentRequired, 402];
        yield 'Forbidden (403)' => [HttpStatus::Forbidden, 403];
        yield 'NotFound (404)' => [HttpStatus::NotFound, 404];
        yield 'MethodNotAllowed (405)' => [HttpStatus::MethodNotAllowed, 405];
        yield 'NotAcceptable (406)' => [HttpStatus::NotAcceptable, 406];
        yield 'ProxyAuthenticationRequired (407)' => [HttpStatus::ProxyAuthenticationRequired, 407];
        yield 'RequestTimeout (408)' => [HttpStatus::RequestTimeout, 408];
        yield 'Conflict (409)' => [HttpStatus::Conflict, 409];
        yield 'Gone (410)' => [HttpStatus::Gone, 410];
        yield 'LengthRequired (411)' => [HttpStatus::LengthRequired, 411];
        yield 'PreconditionFailed (412)' => [HttpStatus::PreconditionFailed, 412];
        yield 'ContentTooLarge (413)' => [HttpStatus::ContentTooLarge, 413];
        yield 'UriTooLong (414)' => [HttpStatus::UriTooLong, 414];
        yield 'UnsupportedMediaType (415)' => [HttpStatus::UnsupportedMediaType, 415];
        yield 'RangeNotSatisfiable (416)' => [HttpStatus::RangeNotSatisfiable, 416];
        yield 'ExpectationFailed (417)' => [HttpStatus::ExpectationFailed, 417];
        yield 'ImATeapot (418)' => [HttpStatus::ImATeapot, 418];
        yield 'MisdirectedRequest (421)' => [HttpStatus::MisdirectedRequest, 421];
        yield 'UnprocessableContent (422)' => [HttpStatus::UnprocessableContent, 422];
        yield 'Locked (423)' => [HttpStatus::Locked, 423];
        yield 'FailedDependency (424)' => [HttpStatus::FailedDependency, 424];
        yield 'TooEarly (425)' => [HttpStatus::TooEarly, 425];
        yield 'UpgradeRequired (426)' => [HttpStatus::UpgradeRequired, 426];
        yield 'PreconditionRequired (428)' => [HttpStatus::PreconditionRequired, 428];
        yield 'TooManyRequests (429)' => [HttpStatus::TooManyRequests, 429];
        yield 'RequestHeaderFieldsTooLarge (431)' => [HttpStatus::RequestHeaderFieldsTooLarge, 431];
        yield 'UnavailableForLegalReasons (451)' => [HttpStatus::UnavailableForLegalReasons, 451];
        yield 'InternalServerError (500)' => [HttpStatus::InternalServerError, 500];
        yield 'NotImplemented (501)' => [HttpStatus::NotImplemented, 501];
        yield 'BadGateway (502)' => [HttpStatus::BadGateway, 502];
        yield 'ServiceUnavailable (503)' => [HttpStatus::ServiceUnavailable, 503];
        yield 'GatewayTimeout (504)' => [HttpStatus::GatewayTimeout, 504];
        yield 'HttpVersionNotSupported (505)' => [HttpStatus::HttpVersionNotSupported, 505];
        yield 'VariantAlsoNegotiates (506)' => [HttpStatus::VariantAlsoNegotiates, 506];
        yield 'InsufficientStorage (507)' => [HttpStatus::InsufficientStorage, 507];
        yield 'LoopDetected (508)' => [HttpStatus::LoopDetected, 508];
        yield 'NotExtended (510)' => [HttpStatus::NotExtended, 510];
        yield 'NetworkAuthenticationRequired (511)' => [HttpStatus::NetworkAuthenticationRequired, 511];
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
     * Provide each HttpStatus case with its expected client error
     * status.
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
     * Provide each HttpStatus case with its expected reason phrase.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpStatus, 1: string}>
     */
    public static function reasonPhraseProvider(): iterable
    {
        yield 'Continue (100)' => [HttpStatus::Continue, 'Continue'];
        yield 'SwitchingProtocols (101)' => [HttpStatus::SwitchingProtocols, 'Switching Protocols'];
        yield 'Processing (102)' => [HttpStatus::Processing, 'Processing'];
        yield 'EarlyHints (103)' => [HttpStatus::EarlyHints, 'Early Hints'];
        yield 'Ok (200)' => [HttpStatus::Ok, 'OK'];
        yield 'Created (201)' => [HttpStatus::Created, 'Created'];
        yield 'Accepted (202)' => [HttpStatus::Accepted, 'Accepted'];
        yield 'NonAuthoritativeInformation (203)' => [
            HttpStatus::NonAuthoritativeInformation,
            'Non-Authoritative Information'
        ];
        yield 'NoContent (204)' => [HttpStatus::NoContent, 'No Content'];
        yield 'ResetContent (205)' => [HttpStatus::ResetContent, 'Reset Content'];
        yield 'PartialContent (206)' => [HttpStatus::PartialContent, 'Partial Content'];
        yield 'MultiStatus (207)' => [HttpStatus::MultiStatus, 'Multi-Status'];
        yield 'AlreadyReported (208)' => [HttpStatus::AlreadyReported, 'Already Reported'];
        yield 'ImUsed (226)' => [HttpStatus::ImUsed, 'IM Used'];
        yield 'MultipleChoices (300)' => [HttpStatus::MultipleChoices, 'Multiple Choices'];
        yield 'MovedPermanently (301)' => [HttpStatus::MovedPermanently, 'Moved Permanently'];
        yield 'Found (302)' => [HttpStatus::Found, 'Found'];
        yield 'SeeOther (303)' => [HttpStatus::SeeOther, 'See Other'];
        yield 'NotModified (304)' => [HttpStatus::NotModified, 'Not Modified'];
        yield 'UseProxy (305)' => [HttpStatus::UseProxy, 'Use Proxy'];
        yield 'Unused (306)' => [HttpStatus::Unused, 'unused'];
        yield 'TemporaryRedirect (307)' => [HttpStatus::TemporaryRedirect, 'Temporary Redirect'];
        yield 'PermanentRedirect (308)' => [HttpStatus::PermanentRedirect, 'Permanent Redirect'];
        yield 'BadRequest (400)' => [HttpStatus::BadRequest, 'Bad Request'];
        yield 'Unauthorized (401)' => [HttpStatus::Unauthorized, 'Unauthorized'];
        yield 'PaymentRequired (402)' => [HttpStatus::PaymentRequired, 'Payment Required'];
        yield 'Forbidden (403)' => [HttpStatus::Forbidden, 'Forbidden'];
        yield 'NotFound (404)' => [HttpStatus::NotFound, 'Not Found'];
        yield 'MethodNotAllowed (405)' => [HttpStatus::MethodNotAllowed, 'Method Not Allowed'];
        yield 'NotAcceptable (406)' => [HttpStatus::NotAcceptable, 'Not Acceptable'];
        yield 'ProxyAuthenticationRequired (407)' => [
            HttpStatus::ProxyAuthenticationRequired,
            'Proxy Authentication Required'
        ];
        yield 'RequestTimeout (408)' => [HttpStatus::RequestTimeout, 'Request Timeout'];
        yield 'Conflict (409)' => [HttpStatus::Conflict, 'Conflict'];
        yield 'Gone (410)' => [HttpStatus::Gone, 'Gone'];
        yield 'LengthRequired (411)' => [HttpStatus::LengthRequired, 'Length Required'];
        yield 'PreconditionFailed (412)' => [HttpStatus::PreconditionFailed, 'Precondition Failed'];
        yield 'ContentTooLarge (413)' => [HttpStatus::ContentTooLarge, 'Content Too Large'];
        yield 'UriTooLong (414)' => [HttpStatus::UriTooLong, 'URI Too Long'];
        yield 'UnsupportedMediaType (415)' => [HttpStatus::UnsupportedMediaType, 'Unsupported Media Type'];
        yield 'RangeNotSatisfiable (416)' => [HttpStatus::RangeNotSatisfiable, 'Range Not Satisfiable'];
        yield 'ExpectationFailed (417)' => [HttpStatus::ExpectationFailed, 'Expectation Failed'];
        yield 'ImATeapot (418)' => [HttpStatus::ImATeapot, 'I\'m a Teapot'];
        yield 'MisdirectedRequest (421)' => [HttpStatus::MisdirectedRequest, 'Misdirected Request'];
        yield 'UnprocessableContent (422)' => [HttpStatus::UnprocessableContent, 'Unprocessable Content'];
        yield 'Locked (423)' => [HttpStatus::Locked, 'Locked'];
        yield 'FailedDependency (424)' => [HttpStatus::FailedDependency, 'Failed Dependency'];
        yield 'TooEarly (425)' => [HttpStatus::TooEarly, 'Too Early'];
        yield 'UpgradeRequired (426)' => [HttpStatus::UpgradeRequired, 'Upgrade Required'];
        yield 'PreconditionRequired (428)' => [HttpStatus::PreconditionRequired, 'Precondition Required'];
        yield 'TooManyRequests (429)' => [HttpStatus::TooManyRequests, 'Too Many Requests'];
        yield 'RequestHeaderFieldsTooLarge (431)' => [
            HttpStatus::RequestHeaderFieldsTooLarge,
            'Request Header Fields Too Large'
        ];
        yield 'UnavailableForLegalReasons (451)' => [
            HttpStatus::UnavailableForLegalReasons,
            'Unavailable For Legal Reasons'
        ];
        yield 'InternalServerError (500)' => [HttpStatus::InternalServerError, 'Internal Server Error'];
        yield 'NotImplemented (501)' => [HttpStatus::NotImplemented, 'Not Implemented'];
        yield 'BadGateway (502)' => [HttpStatus::BadGateway, 'Bad Gateway'];
        yield 'ServiceUnavailable (503)' => [HttpStatus::ServiceUnavailable, 'Service Unavailable'];
        yield 'GatewayTimeout (504)' => [HttpStatus::GatewayTimeout, 'Gateway Timeout'];
        yield 'HttpVersionNotSupported (505)' => [HttpStatus::HttpVersionNotSupported, 'HTTP Version Not Supported'];
        yield 'VariantAlsoNegotiates (506)' => [HttpStatus::VariantAlsoNegotiates, 'Variant Also Negotiates'];
        yield 'InsufficientStorage (507)' => [HttpStatus::InsufficientStorage, 'Insufficient Storage'];
        yield 'LoopDetected (508)' => [HttpStatus::LoopDetected, 'Loop Detected'];
        yield 'NotExtended (510)' => [HttpStatus::NotExtended, 'Not Extended'];
        yield 'NetworkAuthenticationRequired (511)' => [
            HttpStatus::NetworkAuthenticationRequired,
            'Network Authentication Required'
        ];
    }

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
     * Test that from() returns the correct case for known values.
     *
     * @return void
     */
    public function testFromValueRoundTrip(): void
    {
        static::assertSame(HttpStatus::Ok, HttpStatus::from(200));
        static::assertSame(HttpStatus::NotFound, HttpStatus::from(404));
        static::assertSame(HttpStatus::InternalServerError, HttpStatus::from(500));
        static::assertSame(HttpStatus::Continue, HttpStatus::from(100));
        static::assertSame(HttpStatus::MovedPermanently, HttpStatus::from(301));
        static::assertSame(HttpStatus::ImATeapot, HttpStatus::from(418));
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
