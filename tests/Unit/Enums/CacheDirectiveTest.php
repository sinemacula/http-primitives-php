<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\CacheDirective;

/**
 * Tests for the CacheDirective enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(CacheDirective::class)]
class CacheDirectiveTest extends TestCase
{
    /**
     * Test that CacheDirective has the expected number of cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(16, CacheDirective::cases());
    }

    /**
     * Provide each CacheDirective case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\CacheDirective, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'max-age' => [CacheDirective::MAX_AGE, 'max-age'];
        yield 'max-stale' => [CacheDirective::MAX_STALE, 'max-stale'];
        yield 'min-fresh' => [CacheDirective::MIN_FRESH, 'min-fresh'];
        yield 'must-revalidate' => [CacheDirective::MUST_REVALIDATE, 'must-revalidate'];
        yield 'must-understand' => [CacheDirective::MUST_UNDERSTAND, 'must-understand'];
        yield 'no-cache' => [CacheDirective::NO_CACHE, 'no-cache'];
        yield 'no-store' => [CacheDirective::NO_STORE, 'no-store'];
        yield 'no-transform' => [CacheDirective::NO_TRANSFORM, 'no-transform'];
        yield 'only-if-cached' => [CacheDirective::ONLY_IF_CACHED, 'only-if-cached'];
        yield 'private' => [CacheDirective::PRIVATE, 'private'];
        yield 'proxy-revalidate' => [CacheDirective::PROXY_REVALIDATE, 'proxy-revalidate'];
        yield 'public' => [CacheDirective::PUBLIC, 'public'];
        yield 's-maxage' => [CacheDirective::S_MAXAGE, 's-maxage'];
        yield 'stale-if-error' => [CacheDirective::STALE_IF_ERROR, 'stale-if-error'];
        yield 'stale-while-revalidate' => [CacheDirective::STALE_WHILE_REVALIDATE, 'stale-while-revalidate'];
        yield 'immutable' => [CacheDirective::IMMUTABLE, 'immutable'];
    }

    /**
     * Test that each case has the correct string backing value.
     *
     * @param  \SineMacula\Http\Enums\CacheDirective  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValueProvider')]
    public function testBackingValues(CacheDirective $case, string $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Provide each CacheDirective case with whether it is a request directive.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\CacheDirective, 1: bool}>
     */
    public static function isRequestDirectiveProvider(): iterable
    {
        yield 'MAX_AGE is request directive' => [CacheDirective::MAX_AGE, true];
        yield 'MAX_STALE is request directive' => [CacheDirective::MAX_STALE, true];
        yield 'MIN_FRESH is request directive' => [CacheDirective::MIN_FRESH, true];
        yield 'MUST_REVALIDATE is not request directive' => [CacheDirective::MUST_REVALIDATE, false];
        yield 'MUST_UNDERSTAND is not request directive' => [CacheDirective::MUST_UNDERSTAND, false];
        yield 'NO_CACHE is request directive' => [CacheDirective::NO_CACHE, true];
        yield 'NO_STORE is request directive' => [CacheDirective::NO_STORE, true];
        yield 'NO_TRANSFORM is request directive' => [CacheDirective::NO_TRANSFORM, true];
        yield 'ONLY_IF_CACHED is request directive' => [CacheDirective::ONLY_IF_CACHED, true];
        yield 'PRIVATE is not request directive' => [CacheDirective::PRIVATE, false];
        yield 'PROXY_REVALIDATE is not request directive' => [CacheDirective::PROXY_REVALIDATE, false];
        yield 'PUBLIC is not request directive' => [CacheDirective::PUBLIC, false];
        yield 'S_MAXAGE is not request directive' => [CacheDirective::S_MAXAGE, false];
        yield 'STALE_IF_ERROR is request directive' => [CacheDirective::STALE_IF_ERROR, true];
        yield 'STALE_WHILE_REVALIDATE is not request directive' => [CacheDirective::STALE_WHILE_REVALIDATE, false];
        yield 'IMMUTABLE is not request directive' => [CacheDirective::IMMUTABLE, false];
    }

    /**
     * Test that isRequestDirective returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\CacheDirective  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isRequestDirectiveProvider')]
    public function testIsRequestDirective(CacheDirective $case, bool $expected): void
    {
        static::assertSame($expected, $case->isRequestDirective());
    }

    /**
     * Provide each CacheDirective case with whether it is a response directive.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\CacheDirective, 1: bool}>
     */
    public static function isResponseDirectiveProvider(): iterable
    {
        yield 'MAX_AGE is response directive' => [CacheDirective::MAX_AGE, true];
        yield 'MAX_STALE is not response directive' => [CacheDirective::MAX_STALE, false];
        yield 'MIN_FRESH is not response directive' => [CacheDirective::MIN_FRESH, false];
        yield 'MUST_REVALIDATE is response directive' => [CacheDirective::MUST_REVALIDATE, true];
        yield 'MUST_UNDERSTAND is response directive' => [CacheDirective::MUST_UNDERSTAND, true];
        yield 'NO_CACHE is response directive' => [CacheDirective::NO_CACHE, true];
        yield 'NO_STORE is response directive' => [CacheDirective::NO_STORE, true];
        yield 'NO_TRANSFORM is response directive' => [CacheDirective::NO_TRANSFORM, true];
        yield 'ONLY_IF_CACHED is not response directive' => [CacheDirective::ONLY_IF_CACHED, false];
        yield 'PRIVATE is response directive' => [CacheDirective::PRIVATE, true];
        yield 'PROXY_REVALIDATE is response directive' => [CacheDirective::PROXY_REVALIDATE, true];
        yield 'PUBLIC is response directive' => [CacheDirective::PUBLIC, true];
        yield 'S_MAXAGE is response directive' => [CacheDirective::S_MAXAGE, true];
        yield 'STALE_IF_ERROR is response directive' => [CacheDirective::STALE_IF_ERROR, true];
        yield 'STALE_WHILE_REVALIDATE is response directive' => [CacheDirective::STALE_WHILE_REVALIDATE, true];
        yield 'IMMUTABLE is response directive' => [CacheDirective::IMMUTABLE, true];
    }

    /**
     * Test that isResponseDirective returns the correct boolean for each case.
     *
     * @param  \SineMacula\Http\Enums\CacheDirective  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isResponseDirectiveProvider')]
    public function testIsResponseDirective(CacheDirective $case, bool $expected): void
    {
        static::assertSame($expected, $case->isResponseDirective());
    }

    /**
     * Test that tryFrom returns null for an unrecognised directive value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(CacheDirective::tryFrom('unknown-directive'));
    }
}
