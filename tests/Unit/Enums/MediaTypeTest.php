<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\Charset;
use SineMacula\Http\Enums\MediaType;

/**
 * Tests for the MediaType enum.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 *
 * @internal
 */
#[CoversClass(MediaType::class)]
class MediaTypeTest extends TestCase
{
    /**
     * Provide each media type case with its expected backing value.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: string}>
     */
    public static function backingValueProvider(): iterable
    {
        yield 'APPLICATION_JSON' => [MediaType::APPLICATION_JSON, 'application/json'];
        yield 'APPLICATION_XML' => [MediaType::APPLICATION_XML, 'application/xml'];
        yield 'APPLICATION_PDF' => [MediaType::APPLICATION_PDF, 'application/pdf'];
        yield 'APPLICATION_ZIP' => [MediaType::APPLICATION_ZIP, 'application/zip'];
        yield 'APPLICATION_GZIP' => [MediaType::APPLICATION_GZIP, 'application/gzip'];
        yield 'APPLICATION_OCTET_STREAM' => [MediaType::APPLICATION_OCTET_STREAM, 'application/octet-stream'];
        yield 'APPLICATION_FORM_URLENCODED' => [
            MediaType::APPLICATION_FORM_URLENCODED,
            'application/x-www-form-urlencoded',
        ];
        yield 'APPLICATION_JAVASCRIPT' => [MediaType::APPLICATION_JAVASCRIPT, 'application/javascript'];
        yield 'APPLICATION_LD_JSON' => [MediaType::APPLICATION_LD_JSON, 'application/ld+json'];
        yield 'APPLICATION_SQL' => [MediaType::APPLICATION_SQL, 'application/sql'];
        yield 'APPLICATION_GRAPHQL' => [MediaType::APPLICATION_GRAPHQL, 'application/graphql'];
        yield 'APPLICATION_YAML' => [MediaType::APPLICATION_YAML, 'application/yaml'];
        yield 'APPLICATION_MSGPACK' => [MediaType::APPLICATION_MSGPACK, 'application/msgpack'];
        yield 'TEXT_PLAIN' => [MediaType::TEXT_PLAIN, 'text/plain'];
        yield 'TEXT_HTML' => [MediaType::TEXT_HTML, 'text/html'];
        yield 'TEXT_CSS' => [MediaType::TEXT_CSS, 'text/css'];
        yield 'TEXT_CSV' => [MediaType::TEXT_CSV, 'text/csv'];
        yield 'TEXT_XML' => [MediaType::TEXT_XML, 'text/xml'];
        yield 'TEXT_MARKDOWN' => [MediaType::TEXT_MARKDOWN, 'text/markdown'];
        yield 'TEXT_CALENDAR' => [MediaType::TEXT_CALENDAR, 'text/calendar'];
        yield 'TEXT_JAVASCRIPT' => [MediaType::TEXT_JAVASCRIPT, 'text/javascript'];
        yield 'TEXT_EVENT_STREAM' => [MediaType::TEXT_EVENT_STREAM, 'text/event-stream'];
        yield 'MULTIPART_FORM_DATA' => [MediaType::MULTIPART_FORM_DATA, 'multipart/form-data'];
        yield 'MULTIPART_BYTE_RANGES' => [MediaType::MULTIPART_BYTE_RANGES, 'multipart/byteranges'];
        yield 'MULTIPART_MIXED' => [MediaType::MULTIPART_MIXED, 'multipart/mixed'];
        yield 'IMAGE_PNG' => [MediaType::IMAGE_PNG, 'image/png'];
        yield 'IMAGE_JPEG' => [MediaType::IMAGE_JPEG, 'image/jpeg'];
        yield 'IMAGE_GIF' => [MediaType::IMAGE_GIF, 'image/gif'];
        yield 'IMAGE_WEBP' => [MediaType::IMAGE_WEBP, 'image/webp'];
        yield 'IMAGE_SVG_XML' => [MediaType::IMAGE_SVG_XML, 'image/svg+xml'];
        yield 'IMAGE_AVIF' => [MediaType::IMAGE_AVIF, 'image/avif'];
        yield 'IMAGE_ICO' => [MediaType::IMAGE_ICO, 'image/x-icon'];
        yield 'AUDIO_MPEG' => [MediaType::AUDIO_MPEG, 'audio/mpeg'];
        yield 'AUDIO_OGG' => [MediaType::AUDIO_OGG, 'audio/ogg'];
        yield 'AUDIO_WAV' => [MediaType::AUDIO_WAV, 'audio/wav'];
        yield 'AUDIO_WEBM' => [MediaType::AUDIO_WEBM, 'audio/webm'];
        yield 'VIDEO_MP4' => [MediaType::VIDEO_MP4, 'video/mp4'];
        yield 'VIDEO_WEBM' => [MediaType::VIDEO_WEBM, 'video/webm'];
        yield 'VIDEO_OGG' => [MediaType::VIDEO_OGG, 'video/ogg'];
        yield 'FONT_WOFF' => [MediaType::FONT_WOFF, 'font/woff'];
        yield 'FONT_WOFF2' => [MediaType::FONT_WOFF2, 'font/woff2'];
        yield 'FONT_TTF' => [MediaType::FONT_TTF, 'font/ttf'];
        yield 'FONT_OTF' => [MediaType::FONT_OTF, 'font/otf'];
    }

    /**
     * Provide each media type case with its expected isApplication result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isApplicationProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'application/')];
        }
    }

    /**
     * Provide each media type case with its expected isText result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isTextProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'text/')];
        }
    }

    /**
     * Provide each media type case with its expected isMultipart result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isMultipartProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'multipart/')];
        }
    }

    /**
     * Provide each media type case with its expected isImage result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isImageProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'image/')];
        }
    }

    /**
     * Provide each media type case with its expected isAudio result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isAudioProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'audio/')];
        }
    }

    /**
     * Provide each media type case with its expected isVideo result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isVideoProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'video/')];
        }
    }

    /**
     * Provide each media type case with its expected isFont result.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: bool}>
     */
    public static function isFontProvider(): iterable
    {
        foreach (MediaType::cases() as $case) {
            yield $case->name => [$case, str_starts_with($case->value, 'font/')];
        }
    }

    /**
     * Provide each media type case with its expected file extension.
     *
     * @return iterable<string, array{0: \SineMacula\Http\Enums\MediaType, 1: string|null}>
     */
    public static function extensionProvider(): iterable
    {
        yield 'APPLICATION_JSON' => [MediaType::APPLICATION_JSON, 'json'];
        yield 'APPLICATION_XML' => [MediaType::APPLICATION_XML, 'xml'];
        yield 'APPLICATION_PDF' => [MediaType::APPLICATION_PDF, 'pdf'];
        yield 'APPLICATION_ZIP' => [MediaType::APPLICATION_ZIP, 'zip'];
        yield 'APPLICATION_GZIP' => [MediaType::APPLICATION_GZIP, 'gz'];
        yield 'APPLICATION_OCTET_STREAM' => [MediaType::APPLICATION_OCTET_STREAM, 'bin'];
        yield 'APPLICATION_FORM_URLENCODED' => [MediaType::APPLICATION_FORM_URLENCODED, null];
        yield 'APPLICATION_JAVASCRIPT' => [MediaType::APPLICATION_JAVASCRIPT, 'js'];
        yield 'APPLICATION_LD_JSON' => [MediaType::APPLICATION_LD_JSON, 'jsonld'];
        yield 'APPLICATION_SQL' => [MediaType::APPLICATION_SQL, 'sql'];
        yield 'APPLICATION_GRAPHQL' => [MediaType::APPLICATION_GRAPHQL, 'graphql'];
        yield 'APPLICATION_YAML' => [MediaType::APPLICATION_YAML, 'yaml'];
        yield 'APPLICATION_MSGPACK' => [MediaType::APPLICATION_MSGPACK, 'msgpack'];
        yield 'TEXT_PLAIN' => [MediaType::TEXT_PLAIN, 'txt'];
        yield 'TEXT_HTML' => [MediaType::TEXT_HTML, 'html'];
        yield 'TEXT_CSS' => [MediaType::TEXT_CSS, 'css'];
        yield 'TEXT_CSV' => [MediaType::TEXT_CSV, 'csv'];
        yield 'TEXT_XML' => [MediaType::TEXT_XML, 'xml'];
        yield 'TEXT_MARKDOWN' => [MediaType::TEXT_MARKDOWN, 'md'];
        yield 'TEXT_CALENDAR' => [MediaType::TEXT_CALENDAR, 'ics'];
        yield 'TEXT_JAVASCRIPT' => [MediaType::TEXT_JAVASCRIPT, 'js'];
        yield 'TEXT_EVENT_STREAM' => [MediaType::TEXT_EVENT_STREAM, null];
        yield 'MULTIPART_FORM_DATA' => [MediaType::MULTIPART_FORM_DATA, null];
        yield 'MULTIPART_BYTE_RANGES' => [MediaType::MULTIPART_BYTE_RANGES, null];
        yield 'MULTIPART_MIXED' => [MediaType::MULTIPART_MIXED, null];
        yield 'IMAGE_PNG' => [MediaType::IMAGE_PNG, 'png'];
        yield 'IMAGE_JPEG' => [MediaType::IMAGE_JPEG, 'jpg'];
        yield 'IMAGE_GIF' => [MediaType::IMAGE_GIF, 'gif'];
        yield 'IMAGE_WEBP' => [MediaType::IMAGE_WEBP, 'webp'];
        yield 'IMAGE_SVG_XML' => [MediaType::IMAGE_SVG_XML, 'svg'];
        yield 'IMAGE_AVIF' => [MediaType::IMAGE_AVIF, 'avif'];
        yield 'IMAGE_ICO' => [MediaType::IMAGE_ICO, 'ico'];
        yield 'AUDIO_MPEG' => [MediaType::AUDIO_MPEG, 'mp3'];
        yield 'AUDIO_OGG' => [MediaType::AUDIO_OGG, 'ogg'];
        yield 'AUDIO_WAV' => [MediaType::AUDIO_WAV, 'wav'];
        yield 'AUDIO_WEBM' => [MediaType::AUDIO_WEBM, 'weba'];
        yield 'VIDEO_MP4' => [MediaType::VIDEO_MP4, 'mp4'];
        yield 'VIDEO_WEBM' => [MediaType::VIDEO_WEBM, 'webm'];
        yield 'VIDEO_OGG' => [MediaType::VIDEO_OGG, 'ogv'];
        yield 'FONT_WOFF' => [MediaType::FONT_WOFF, 'woff'];
        yield 'FONT_WOFF2' => [MediaType::FONT_WOFF2, 'woff2'];
        yield 'FONT_TTF' => [MediaType::FONT_TTF, 'ttf'];
        yield 'FONT_OTF' => [MediaType::FONT_OTF, 'otf'];
    }

    /**
     * Test the total number of enum cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(43, MediaType::cases());
    }

    /**
     * Test that each case has the correct backing value.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  string  $expectedValue
     * @return void
     */
    #[DataProvider('backingValueProvider')]
    public function testBackingValues(MediaType $case, string $expectedValue): void
    {
        static::assertSame($expectedValue, $case->value);
    }

    /**
     * Test that isApplication() returns true only for application types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isApplicationProvider')]
    public function testIsApplication(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isApplication());
    }

    /**
     * Test that isText() returns true only for text types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isTextProvider')]
    public function testIsText(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isText());
    }

    /**
     * Test that isMultipart() returns true only for multipart types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isMultipartProvider')]
    public function testIsMultipart(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isMultipart());
    }

    /**
     * Test that isImage() returns true only for image types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isImageProvider')]
    public function testIsImage(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isImage());
    }

    /**
     * Test that isAudio() returns true only for audio types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isAudioProvider')]
    public function testIsAudio(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isAudio());
    }

    /**
     * Test that isVideo() returns true only for video types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isVideoProvider')]
    public function testIsVideo(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isVideo());
    }

    /**
     * Test that isFont() returns true only for font types.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  bool  $expected
     * @return void
     */
    #[DataProvider('isFontProvider')]
    public function testIsFont(MediaType $case, bool $expected): void
    {
        static::assertSame($expected, $case->isFont());
    }

    /**
     * Test that getExtension() returns the correct extension for each case.
     *
     * @param  \SineMacula\Http\Enums\MediaType  $case
     * @param  string|null  $expectedExtension
     * @return void
     */
    #[DataProvider('extensionProvider')]
    public function testGetExtension(MediaType $case, ?string $expectedExtension): void
    {
        static::assertSame($expectedExtension, $case->getExtension());
    }

    /**
     * Test that getMimeType() returns the MIME type string.
     *
     * @return void
     */
    public function testGetMimeType(): void
    {
        static::assertSame('application/json', MediaType::APPLICATION_JSON->getMimeType());
        static::assertSame('text/html', MediaType::TEXT_HTML->getMimeType());
        static::assertSame('image/png', MediaType::IMAGE_PNG->getMimeType());
    }

    /**
     * Test that withCharset() builds the correct content type string.
     *
     * @return void
     */
    public function testWithCharset(): void
    {
        static::assertSame('text/csv; charset=utf-8', MediaType::TEXT_CSV->withCharset(Charset::UTF_8));
        static::assertSame('application/json; charset=utf-8', MediaType::APPLICATION_JSON->withCharset(Charset::UTF_8));
        static::assertSame('text/html; charset=iso-8859-1', MediaType::TEXT_HTML->withCharset(Charset::ISO_8859_1));
        static::assertSame('text/plain; charset=us-ascii', MediaType::TEXT_PLAIN->withCharset(Charset::ASCII));
    }

    /**
     * Test that tryFrom returns null for an unknown media type value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(MediaType::tryFrom('application/unknown'));
    }
}
