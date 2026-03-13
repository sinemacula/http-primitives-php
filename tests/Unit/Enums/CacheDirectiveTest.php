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
        yield 'max-age' => [CacheDirective::MaxAge, 'max-age'];
        yield 'max-stale' => [CacheDirective::MaxStale, 'max-stale'];
        yield 'min-fresh' => [CacheDirective::MinFresh, 'min-fresh'];
        yield 'must-revalidate' => [CacheDirective::MustRevalidate, 'must-revalidate'];
        yield 'must-understand' => [CacheDirective::MustUnderstand, 'must-understand'];
        yield 'no-cache' => [CacheDirective::NoCache, 'no-cache'];
        yield 'no-store' => [CacheDirective::NoStore, 'no-store'];
        yield 'no-transform' => [CacheDirective::NoTransform, 'no-transform'];
        yield 'only-if-cached' => [CacheDirective::OnlyIfCached, 'only-if-cached'];
        yield 'private' => [CacheDirective::Private, 'private'];
        yield 'proxy-revalidate' => [CacheDirective::ProxyRevalidate, 'proxy-revalidate'];
        yield 'public' => [CacheDirective::Public, 'public'];
        yield 's-maxage' => [CacheDirective::SMaxage, 's-maxage'];
        yield 'stale-if-error' => [CacheDirective::StaleIfError, 'stale-if-error'];
        yield 'stale-while-revalidate' => [CacheDirective::StaleWhileRevalidate, 'stale-while-revalidate'];
        yield 'immutable' => [CacheDirective::Immutable, 'immutable'];
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
        yield 'MaxAge is request directive' => [CacheDirective::MaxAge, true];
        yield 'MaxStale is request directive' => [CacheDirective::MaxStale, true];
        yield 'MinFresh is request directive' => [CacheDirective::MinFresh, true];
        yield 'MustRevalidate is not request directive' => [CacheDirective::MustRevalidate, false];
        yield 'MustUnderstand is not request directive' => [CacheDirective::MustUnderstand, false];
        yield 'NoCache is request directive' => [CacheDirective::NoCache, true];
        yield 'NoStore is request directive' => [CacheDirective::NoStore, true];
        yield 'NoTransform is request directive' => [CacheDirective::NoTransform, true];
        yield 'OnlyIfCached is request directive' => [CacheDirective::OnlyIfCached, true];
        yield 'Private is not request directive' => [CacheDirective::Private, false];
        yield 'ProxyRevalidate is not request directive' => [CacheDirective::ProxyRevalidate, false];
        yield 'Public is not request directive' => [CacheDirective::Public, false];
        yield 'SMaxage is not request directive' => [CacheDirective::SMaxage, false];
        yield 'StaleIfError is request directive' => [CacheDirective::StaleIfError, true];
        yield 'StaleWhileRevalidate is not request directive' => [CacheDirective::StaleWhileRevalidate, false];
        yield 'Immutable is not request directive' => [CacheDirective::Immutable, false];
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
        yield 'MaxAge is response directive' => [CacheDirective::MaxAge, true];
        yield 'MaxStale is not response directive' => [CacheDirective::MaxStale, false];
        yield 'MinFresh is not response directive' => [CacheDirective::MinFresh, false];
        yield 'MustRevalidate is response directive' => [CacheDirective::MustRevalidate, true];
        yield 'MustUnderstand is response directive' => [CacheDirective::MustUnderstand, true];
        yield 'NoCache is response directive' => [CacheDirective::NoCache, true];
        yield 'NoStore is response directive' => [CacheDirective::NoStore, true];
        yield 'NoTransform is response directive' => [CacheDirective::NoTransform, true];
        yield 'OnlyIfCached is not response directive' => [CacheDirective::OnlyIfCached, false];
        yield 'Private is response directive' => [CacheDirective::Private, true];
        yield 'ProxyRevalidate is response directive' => [CacheDirective::ProxyRevalidate, true];
        yield 'Public is response directive' => [CacheDirective::Public, true];
        yield 'SMaxage is response directive' => [CacheDirective::SMaxage, true];
        yield 'StaleIfError is response directive' => [CacheDirective::StaleIfError, true];
        yield 'StaleWhileRevalidate is response directive' => [CacheDirective::StaleWhileRevalidate, true];
        yield 'Immutable is response directive' => [CacheDirective::Immutable, true];
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
