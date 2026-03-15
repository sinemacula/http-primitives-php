<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\HttpMethod;

/**
 * Unit tests for the HttpMethod enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(HttpMethod::class)]
class HttpMethodTest extends TestCase
{
    /**
     * Provide each HttpMethod case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: string}>
     */
    public static function backingValuesProvider(): iterable
    {
        yield 'GET' => [HttpMethod::GET, 'GET'];
        yield 'HEAD' => [HttpMethod::HEAD, 'HEAD'];
        yield 'POST' => [HttpMethod::POST, 'POST'];
        yield 'PUT' => [HttpMethod::PUT, 'PUT'];
        yield 'PATCH' => [HttpMethod::PATCH, 'PATCH'];
        yield 'DELETE' => [HttpMethod::DELETE, 'DELETE'];
        yield 'CONNECT' => [HttpMethod::CONNECT, 'CONNECT'];
        yield 'OPTIONS' => [HttpMethod::OPTIONS, 'OPTIONS'];
        yield 'TRACE' => [HttpMethod::TRACE, 'TRACE'];
    }

    /**
     * Provide each HttpMethod case with its expected safety status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: bool}>
     */
    public static function safeMethodsProvider(): iterable
    {
        yield 'GET is safe' => [HttpMethod::GET, true];
        yield 'HEAD is safe' => [HttpMethod::HEAD, true];
        yield 'POST is not safe' => [HttpMethod::POST, false];
        yield 'PUT is not safe' => [HttpMethod::PUT, false];
        yield 'PATCH is not safe' => [HttpMethod::PATCH, false];
        yield 'DELETE is not safe' => [HttpMethod::DELETE, false];
        yield 'CONNECT is not safe' => [HttpMethod::CONNECT, false];
        yield 'OPTIONS is safe' => [HttpMethod::OPTIONS, true];
        yield 'TRACE is safe' => [HttpMethod::TRACE, true];
    }

    /**
     * Provide each HttpMethod case with its expected idempotency status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: bool}>
     */
    public static function idempotentMethodsProvider(): iterable
    {
        yield 'GET is idempotent' => [HttpMethod::GET, true];
        yield 'HEAD is idempotent' => [HttpMethod::HEAD, true];
        yield 'POST is not idempotent' => [HttpMethod::POST, false];
        yield 'PUT is idempotent' => [HttpMethod::PUT, true];
        yield 'PATCH is not idempotent' => [HttpMethod::PATCH, false];
        yield 'DELETE is idempotent' => [HttpMethod::DELETE, true];
        yield 'CONNECT is not idempotent' => [HttpMethod::CONNECT, false];
        yield 'OPTIONS is idempotent' => [HttpMethod::OPTIONS, true];
        yield 'TRACE is idempotent' => [HttpMethod::TRACE, true];
    }

    /**
     * Test that the enum contains exactly 9 cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(9, HttpMethod::cases());
    }

    /**
     * Test that each case has the correct string backing value.
     *
     * @param  \SineMacula\Http\Enums\HttpMethod  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValuesProvider')]
    public function testBackingValues(HttpMethod $case, string $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Test that isSafe returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpMethod  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('safeMethodsProvider')]
    public function testIsSafe(HttpMethod $case, bool $expected): void
    {
        static::assertSame($expected, $case->isSafe());
    }

    /**
     * Test that isIdempotent returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\HttpMethod  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('idempotentMethodsProvider')]
    public function testIsIdempotent(HttpMethod $case, bool $expected): void
    {
        static::assertSame($expected, $case->isIdempotent());
    }

    /**
     * Test that getVerb() returns the HTTP verb string.
     *
     * @return void
     */
    public function testGetVerb(): void
    {
        static::assertSame('GET', HttpMethod::GET->getVerb());
        static::assertSame('POST', HttpMethod::POST->getVerb());
        static::assertSame('DELETE', HttpMethod::DELETE->getVerb());
    }

    /**
     * Test that from() returns the correct case for known values.
     *
     * @return void
     */
    public function testFromValueRoundTrip(): void
    {
        static::assertSame(HttpMethod::GET, HttpMethod::from('GET'));
        static::assertSame(HttpMethod::HEAD, HttpMethod::from('HEAD'));
        static::assertSame(HttpMethod::POST, HttpMethod::from('POST'));
        static::assertSame(HttpMethod::PUT, HttpMethod::from('PUT'));
        static::assertSame(HttpMethod::DELETE, HttpMethod::from('DELETE'));
        static::assertSame(HttpMethod::OPTIONS, HttpMethod::from('OPTIONS'));
    }

    /**
     * Test that tryFrom() returns null for an unknown value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(HttpMethod::tryFrom('INVALID'));
    }
}
