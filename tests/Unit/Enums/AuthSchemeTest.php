<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\AuthScheme;

/**
 * Tests for the AuthScheme enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(AuthScheme::class)]
class AuthSchemeTest extends TestCase
{
    /**
     * Test that AuthScheme has the expected number of cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(3, AuthScheme::cases());
    }

    /**
     * Provide each AuthScheme case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\AuthScheme, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'BASIC' => [AuthScheme::BASIC, 'Basic'];
        yield 'BEARER' => [AuthScheme::BEARER, 'Bearer'];
        yield 'DIGEST' => [AuthScheme::DIGEST, 'Digest'];
    }

    /**
     * Test that each case has the correct string backing value.
     *
     * @param  \SineMacula\Http\Enums\AuthScheme  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValueProvider')]
    public function testBackingValues(AuthScheme $case, string $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Test that from and tryFrom produce the expected round-trip results.
     *
     * @return void
     */
    public function testFromValueRoundTrip(): void
    {
        static::assertSame(AuthScheme::BASIC, AuthScheme::from('Basic'));
        static::assertSame(AuthScheme::BEARER, AuthScheme::from('Bearer'));
        static::assertSame(AuthScheme::DIGEST, AuthScheme::from('Digest'));
    }

    /**
     * Test that tryFrom returns null for an unrecognised scheme value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(AuthScheme::tryFrom('OAuth'));
    }
}
