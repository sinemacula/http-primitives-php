<?php

declare(strict_types = 1);

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\Charset;

/**
 * Tests for the Charset enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(Charset::class)]
final class CharsetTest extends TestCase
{
    /**
     * Test the total number of enum cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        self::assertCount(20, Charset::cases());
    }

    /**
     * Provide each charset case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\Charset, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'UTF_8' => [Charset::UTF_8, 'utf-8'];
        yield 'ASCII' => [Charset::ASCII, 'us-ascii'];
        yield 'ISO_8859_1' => [Charset::ISO_8859_1, 'iso-8859-1'];
        yield 'ISO_8859_2' => [Charset::ISO_8859_2, 'iso-8859-2'];
        yield 'ISO_8859_9' => [Charset::ISO_8859_9, 'iso-8859-9'];
        yield 'ISO_8859_15' => [Charset::ISO_8859_15, 'iso-8859-15'];
        yield 'WINDOWS_1250' => [Charset::WINDOWS_1250, 'windows-1250'];
        yield 'WINDOWS_1251' => [Charset::WINDOWS_1251, 'windows-1251'];
        yield 'WINDOWS_1252' => [Charset::WINDOWS_1252, 'windows-1252'];
        yield 'WINDOWS_1256' => [Charset::WINDOWS_1256, 'windows-1256'];
        yield 'UTF_16' => [Charset::UTF_16, 'utf-16'];
        yield 'UTF_16_BE' => [Charset::UTF_16_BE, 'utf-16be'];
        yield 'UTF_16_LE' => [Charset::UTF_16_LE, 'utf-16le'];
        yield 'UTF_32' => [Charset::UTF_32, 'utf-32'];
        yield 'SHIFT_JIS' => [Charset::SHIFT_JIS, 'shift_jis'];
        yield 'EUC_JP' => [Charset::EUC_JP, 'euc-jp'];
        yield 'EUC_KR' => [Charset::EUC_KR, 'euc-kr'];
        yield 'GB_2312' => [Charset::GB_2312, 'gb2312'];
        yield 'BIG_5' => [Charset::BIG_5, 'big5'];
        yield 'KOI8_R' => [Charset::KOI8_R, 'koi8-r'];
    }

    /**
     * Test that each case has the correct backing value.
     *
     * @param  \SineMacula\Http\Enums\Charset  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValueProvider')]
    public function testBackingValues(Charset $case, string $expectedValue): void
    {
        self::assertSame($expectedValue, $case->value);
    }

    /**
     * Test that getEncoding() returns the encoding name string.
     *
     * @return void
     */
    public function testGetEncoding(): void
    {
        self::assertSame('utf-8', Charset::UTF_8->getEncoding());
        self::assertSame('iso-8859-1', Charset::ISO_8859_1->getEncoding());
        self::assertSame('shift_jis', Charset::SHIFT_JIS->getEncoding());
    }

    /**
     * Test that tryFrom returns null for an unknown charset value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        self::assertNull(Charset::tryFrom('unknown-charset'));
    }
}
