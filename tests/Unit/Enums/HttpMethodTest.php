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
     * Test that the enum contains exactly 9 cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(9, HttpMethod::cases());
    }

    /**
     * Provide each HttpMethod case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: string}>
     */
    public static function backingValuesProvider(): iterable
    {
        yield 'Get' => [HttpMethod::Get, 'GET'];
        yield 'Head' => [HttpMethod::Head, 'HEAD'];
        yield 'Post' => [HttpMethod::Post, 'POST'];
        yield 'Put' => [HttpMethod::Put, 'PUT'];
        yield 'Patch' => [HttpMethod::Patch, 'PATCH'];
        yield 'Delete' => [HttpMethod::Delete, 'DELETE'];
        yield 'Connect' => [HttpMethod::Connect, 'CONNECT'];
        yield 'Options' => [HttpMethod::Options, 'OPTIONS'];
        yield 'Trace' => [HttpMethod::Trace, 'TRACE'];
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
     * Provide each HttpMethod case with its expected safety status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: bool}>
     */
    public static function safeMethodsProvider(): iterable
    {
        yield 'Get is safe' => [HttpMethod::Get, true];
        yield 'Head is safe' => [HttpMethod::Head, true];
        yield 'Post is not safe' => [HttpMethod::Post, false];
        yield 'Put is not safe' => [HttpMethod::Put, false];
        yield 'Patch is not safe' => [HttpMethod::Patch, false];
        yield 'Delete is not safe' => [HttpMethod::Delete, false];
        yield 'Connect is not safe' => [HttpMethod::Connect, false];
        yield 'Options is safe' => [HttpMethod::Options, true];
        yield 'Trace is safe' => [HttpMethod::Trace, true];
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
     * Provide each HttpMethod case with its expected idempotency
     * status.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\HttpMethod, 1: bool}>
     */
    public static function idempotentMethodsProvider(): iterable
    {
        yield 'Get is idempotent' => [HttpMethod::Get, true];
        yield 'Head is idempotent' => [HttpMethod::Head, true];
        yield 'Post is not idempotent' => [HttpMethod::Post, false];
        yield 'Put is idempotent' => [HttpMethod::Put, true];
        yield 'Patch is not idempotent' => [HttpMethod::Patch, false];
        yield 'Delete is idempotent' => [HttpMethod::Delete, true];
        yield 'Connect is not idempotent' => [HttpMethod::Connect, false];
        yield 'Options is idempotent' => [HttpMethod::Options, true];
        yield 'Trace is idempotent' => [HttpMethod::Trace, true];
    }

    /**
     * Test that isIdempotent returns the correct boolean for each
     * case.
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
     * Test that from() returns the correct case for known values.
     *
     * @return void
     */
    public function testFromValueRoundTrip(): void
    {
        static::assertSame(HttpMethod::Get, HttpMethod::from('GET'));
        static::assertSame(HttpMethod::Head, HttpMethod::from('HEAD'));
        static::assertSame(HttpMethod::Post, HttpMethod::from('POST'));
        static::assertSame(HttpMethod::Put, HttpMethod::from('PUT'));
        static::assertSame(HttpMethod::Delete, HttpMethod::from('DELETE'));
        static::assertSame(HttpMethod::Options, HttpMethod::from('OPTIONS'));
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
