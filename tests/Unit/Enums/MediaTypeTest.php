<?php

namespace Tests\Unit\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
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
        yield 'ApplicationJson' => [MediaType::ApplicationJson, 'application/json'];
        yield 'ApplicationXml' => [MediaType::ApplicationXml, 'application/xml'];
        yield 'ApplicationPdf' => [MediaType::ApplicationPdf, 'application/pdf'];
        yield 'ApplicationZip' => [MediaType::ApplicationZip, 'application/zip'];
        yield 'ApplicationGzip' => [MediaType::ApplicationGzip, 'application/gzip'];
        yield 'ApplicationOctetStream' => [MediaType::ApplicationOctetStream, 'application/octet-stream'];
        yield 'ApplicationFormUrlencoded' => [
            MediaType::ApplicationFormUrlencoded,
            'application/x-www-form-urlencoded'
        ];
        yield 'ApplicationJavascript' => [MediaType::ApplicationJavascript, 'application/javascript'];
        yield 'ApplicationLdJson' => [MediaType::ApplicationLdJson, 'application/ld+json'];
        yield 'ApplicationSql' => [MediaType::ApplicationSql, 'application/sql'];
        yield 'ApplicationGraphql' => [MediaType::ApplicationGraphql, 'application/graphql'];
        yield 'ApplicationYaml' => [MediaType::ApplicationYaml, 'application/yaml'];
        yield 'ApplicationMsgpack' => [MediaType::ApplicationMsgpack, 'application/msgpack'];
        yield 'TextPlain' => [MediaType::TextPlain, 'text/plain'];
        yield 'TextHtml' => [MediaType::TextHtml, 'text/html'];
        yield 'TextCss' => [MediaType::TextCss, 'text/css'];
        yield 'TextCsv' => [MediaType::TextCsv, 'text/csv'];
        yield 'TextXml' => [MediaType::TextXml, 'text/xml'];
        yield 'TextMarkdown' => [MediaType::TextMarkdown, 'text/markdown'];
        yield 'TextCalendar' => [MediaType::TextCalendar, 'text/calendar'];
        yield 'TextJavascript' => [MediaType::TextJavascript, 'text/javascript'];
        yield 'MultipartFormData' => [MediaType::MultipartFormData, 'multipart/form-data'];
        yield 'MultipartByteRanges' => [MediaType::MultipartByteRanges, 'multipart/byteranges'];
        yield 'MultipartMixed' => [MediaType::MultipartMixed, 'multipart/mixed'];
        yield 'ImagePng' => [MediaType::ImagePng, 'image/png'];
        yield 'ImageJpeg' => [MediaType::ImageJpeg, 'image/jpeg'];
        yield 'ImageGif' => [MediaType::ImageGif, 'image/gif'];
        yield 'ImageWebp' => [MediaType::ImageWebp, 'image/webp'];
        yield 'ImageSvgXml' => [MediaType::ImageSvgXml, 'image/svg+xml'];
        yield 'ImageAvif' => [MediaType::ImageAvif, 'image/avif'];
        yield 'ImageIco' => [MediaType::ImageIco, 'image/x-icon'];
        yield 'AudioMpeg' => [MediaType::AudioMpeg, 'audio/mpeg'];
        yield 'AudioOgg' => [MediaType::AudioOgg, 'audio/ogg'];
        yield 'AudioWav' => [MediaType::AudioWav, 'audio/wav'];
        yield 'AudioWebm' => [MediaType::AudioWebm, 'audio/webm'];
        yield 'VideoMp4' => [MediaType::VideoMp4, 'video/mp4'];
        yield 'VideoWebm' => [MediaType::VideoWebm, 'video/webm'];
        yield 'VideoOgg' => [MediaType::VideoOgg, 'video/ogg'];
        yield 'FontWoff' => [MediaType::FontWoff, 'font/woff'];
        yield 'FontWoff2' => [MediaType::FontWoff2, 'font/woff2'];
        yield 'FontTtf' => [MediaType::FontTtf, 'font/ttf'];
        yield 'FontOtf' => [MediaType::FontOtf, 'font/otf'];
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
        yield 'ApplicationJson' => [MediaType::ApplicationJson, 'json'];
        yield 'ApplicationXml' => [MediaType::ApplicationXml, 'xml'];
        yield 'ApplicationPdf' => [MediaType::ApplicationPdf, 'pdf'];
        yield 'ApplicationZip' => [MediaType::ApplicationZip, 'zip'];
        yield 'ApplicationGzip' => [MediaType::ApplicationGzip, 'gz'];
        yield 'ApplicationOctetStream' => [MediaType::ApplicationOctetStream, 'bin'];
        yield 'ApplicationFormUrlencoded' => [MediaType::ApplicationFormUrlencoded, null];
        yield 'ApplicationJavascript' => [MediaType::ApplicationJavascript, 'js'];
        yield 'ApplicationLdJson' => [MediaType::ApplicationLdJson, 'jsonld'];
        yield 'ApplicationSql' => [MediaType::ApplicationSql, 'sql'];
        yield 'ApplicationGraphql' => [MediaType::ApplicationGraphql, 'graphql'];
        yield 'ApplicationYaml' => [MediaType::ApplicationYaml, 'yaml'];
        yield 'ApplicationMsgpack' => [MediaType::ApplicationMsgpack, 'msgpack'];
        yield 'TextPlain' => [MediaType::TextPlain, 'txt'];
        yield 'TextHtml' => [MediaType::TextHtml, 'html'];
        yield 'TextCss' => [MediaType::TextCss, 'css'];
        yield 'TextCsv' => [MediaType::TextCsv, 'csv'];
        yield 'TextXml' => [MediaType::TextXml, 'xml'];
        yield 'TextMarkdown' => [MediaType::TextMarkdown, 'md'];
        yield 'TextCalendar' => [MediaType::TextCalendar, 'ics'];
        yield 'TextJavascript' => [MediaType::TextJavascript, 'js'];
        yield 'MultipartFormData' => [MediaType::MultipartFormData, null];
        yield 'MultipartByteRanges' => [MediaType::MultipartByteRanges, null];
        yield 'MultipartMixed' => [MediaType::MultipartMixed, null];
        yield 'ImagePng' => [MediaType::ImagePng, 'png'];
        yield 'ImageJpeg' => [MediaType::ImageJpeg, 'jpg'];
        yield 'ImageGif' => [MediaType::ImageGif, 'gif'];
        yield 'ImageWebp' => [MediaType::ImageWebp, 'webp'];
        yield 'ImageSvgXml' => [MediaType::ImageSvgXml, 'svg'];
        yield 'ImageAvif' => [MediaType::ImageAvif, 'avif'];
        yield 'ImageIco' => [MediaType::ImageIco, 'ico'];
        yield 'AudioMpeg' => [MediaType::AudioMpeg, 'mp3'];
        yield 'AudioOgg' => [MediaType::AudioOgg, 'ogg'];
        yield 'AudioWav' => [MediaType::AudioWav, 'wav'];
        yield 'AudioWebm' => [MediaType::AudioWebm, 'weba'];
        yield 'VideoMp4' => [MediaType::VideoMp4, 'mp4'];
        yield 'VideoWebm' => [MediaType::VideoWebm, 'webm'];
        yield 'VideoOgg' => [MediaType::VideoOgg, 'ogv'];
        yield 'FontWoff' => [MediaType::FontWoff, 'woff'];
        yield 'FontWoff2' => [MediaType::FontWoff2, 'woff2'];
        yield 'FontTtf' => [MediaType::FontTtf, 'ttf'];
        yield 'FontOtf' => [MediaType::FontOtf, 'otf'];
    }

    /**
     * Test the total number of enum cases.
     *
     * @return void
     */
    public function testCaseCount(): void
    {
        static::assertCount(42, MediaType::cases());
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
     * Test that tryFrom returns null for an unknown media type value.
     *
     * @return void
     */
    public function testTryFromReturnsNullForUnknownValue(): void
    {
        static::assertNull(MediaType::tryFrom('application/unknown'));
    }
}
