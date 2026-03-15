<?php

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of common media types.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum MediaType: string
{
    /*
    |---------------------------------------------------------------------------
    | Application types
    |---------------------------------------------------------------------------
    */
    case APPLICATION_JSON            = 'application/json';
    case APPLICATION_XML             = 'application/xml';
    case APPLICATION_PDF             = 'application/pdf';
    case APPLICATION_ZIP             = 'application/zip';
    case APPLICATION_GZIP            = 'application/gzip';
    case APPLICATION_OCTET_STREAM    = 'application/octet-stream';
    case APPLICATION_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    case APPLICATION_JAVASCRIPT      = 'application/javascript';
    case APPLICATION_LD_JSON         = 'application/ld+json';
    case APPLICATION_SQL             = 'application/sql';
    case APPLICATION_GRAPHQL         = 'application/graphql';
    case APPLICATION_YAML            = 'application/yaml';
    case APPLICATION_MSGPACK         = 'application/msgpack';

    /*
    |---------------------------------------------------------------------------
    | Text types
    |---------------------------------------------------------------------------
    */
    case TEXT_PLAIN        = 'text/plain';
    case TEXT_HTML         = 'text/html';
    case TEXT_CSS          = 'text/css';
    case TEXT_CSV          = 'text/csv';
    case TEXT_XML          = 'text/xml';
    case TEXT_MARKDOWN     = 'text/markdown';
    case TEXT_CALENDAR     = 'text/calendar';
    case TEXT_JAVASCRIPT   = 'text/javascript';
    case TEXT_EVENT_STREAM = 'text/event-stream';

    /*
    |---------------------------------------------------------------------------
    | Multipart types
    |---------------------------------------------------------------------------
    */
    case MULTIPART_FORM_DATA   = 'multipart/form-data';
    case MULTIPART_BYTE_RANGES = 'multipart/byteranges';
    case MULTIPART_MIXED       = 'multipart/mixed';

    /*
    |---------------------------------------------------------------------------
    | Image types
    |---------------------------------------------------------------------------
    */
    case IMAGE_PNG     = 'image/png';
    case IMAGE_JPEG    = 'image/jpeg';
    case IMAGE_GIF     = 'image/gif';
    case IMAGE_WEBP    = 'image/webp';
    case IMAGE_SVG_XML = 'image/svg+xml';
    case IMAGE_AVIF    = 'image/avif';
    case IMAGE_ICO     = 'image/x-icon';

    /*
    |---------------------------------------------------------------------------
    | Audio types
    |---------------------------------------------------------------------------
    */
    case AUDIO_MPEG = 'audio/mpeg';
    case AUDIO_OGG  = 'audio/ogg';
    case AUDIO_WAV  = 'audio/wav';
    case AUDIO_WEBM = 'audio/webm';

    /*
    |---------------------------------------------------------------------------
    | Video types
    |---------------------------------------------------------------------------
    */
    case VIDEO_MP4  = 'video/mp4';
    case VIDEO_WEBM = 'video/webm';
    case VIDEO_OGG  = 'video/ogg';

    /*
    |---------------------------------------------------------------------------
    | Font types
    |---------------------------------------------------------------------------
    */
    case FONT_WOFF  = 'font/woff';
    case FONT_WOFF2 = 'font/woff2';
    case FONT_TTF   = 'font/ttf';
    case FONT_OTF   = 'font/otf';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Get the MIME type string.
     *
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->value;
    }

    /**
     * Check if the media type is in the application category.
     *
     * @return bool
     */
    public function isApplication(): bool
    {
        return str_starts_with($this->value, 'application/');
    }

    /**
     * Check if the media type is in the text category.
     *
     * @return bool
     */
    public function isText(): bool
    {
        return str_starts_with($this->value, 'text/');
    }

    /**
     * Check if the media type is in the multipart category.
     *
     * @return bool
     */
    public function isMultipart(): bool
    {
        return str_starts_with($this->value, 'multipart/');
    }

    /**
     * Check if the media type is in the image category.
     *
     * @return bool
     */
    public function isImage(): bool
    {
        return str_starts_with($this->value, 'image/');
    }

    /**
     * Check if the media type is in the audio category.
     *
     * @return bool
     */
    public function isAudio(): bool
    {
        return str_starts_with($this->value, 'audio/');
    }

    /**
     * Check if the media type is in the video category.
     *
     * @return bool
     */
    public function isVideo(): bool
    {
        return str_starts_with($this->value, 'video/');
    }

    /**
     * Check if the media type is in the font category.
     *
     * @return bool
     */
    public function isFont(): bool
    {
        return str_starts_with($this->value, 'font/');
    }

    /**
     * Build a content type string with the given charset parameter.
     *
     * @param  \SineMacula\Http\Enums\Charset  $charset
     * @return string
     */
    public function withCharset(Charset $charset): string
    {
        return $this->value . '; charset=' . $charset->value;
    }

    /**
     * Get the common file extension for this media type.
     *
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return match ($this) {
            self::APPLICATION_JSON            => 'json',
            self::APPLICATION_XML             => 'xml',
            self::APPLICATION_PDF             => 'pdf',
            self::APPLICATION_ZIP             => 'zip',
            self::APPLICATION_GZIP            => 'gz',
            self::APPLICATION_OCTET_STREAM    => 'bin',
            self::APPLICATION_FORM_URLENCODED => null,
            self::APPLICATION_JAVASCRIPT      => 'js',
            self::APPLICATION_LD_JSON         => 'jsonld',
            self::APPLICATION_SQL             => 'sql',
            self::APPLICATION_GRAPHQL         => 'graphql',
            self::APPLICATION_YAML            => 'yaml',
            self::APPLICATION_MSGPACK         => 'msgpack',
            self::TEXT_PLAIN                  => 'txt',
            self::TEXT_HTML                   => 'html',
            self::TEXT_CSS                    => 'css',
            self::TEXT_CSV                    => 'csv',
            self::TEXT_XML                    => 'xml',
            self::TEXT_MARKDOWN               => 'md',
            self::TEXT_CALENDAR               => 'ics',
            self::TEXT_JAVASCRIPT             => 'js',
            self::TEXT_EVENT_STREAM           => null,
            self::MULTIPART_FORM_DATA         => null,
            self::MULTIPART_BYTE_RANGES       => null,
            self::MULTIPART_MIXED             => null,
            self::IMAGE_PNG                   => 'png',
            self::IMAGE_JPEG                  => 'jpg',
            self::IMAGE_GIF                   => 'gif',
            self::IMAGE_WEBP                  => 'webp',
            self::IMAGE_SVG_XML               => 'svg',
            self::IMAGE_AVIF                  => 'avif',
            self::IMAGE_ICO                   => 'ico',
            self::AUDIO_MPEG                  => 'mp3',
            self::AUDIO_OGG                   => 'ogg',
            self::AUDIO_WAV                   => 'wav',
            self::AUDIO_WEBM                  => 'weba',
            self::VIDEO_MP4                   => 'mp4',
            self::VIDEO_WEBM                  => 'webm',
            self::VIDEO_OGG                   => 'ogv',
            self::FONT_WOFF                   => 'woff',
            self::FONT_WOFF2                  => 'woff2',
            self::FONT_TTF                    => 'ttf',
            self::FONT_OTF                    => 'otf',
        };
    }
}
