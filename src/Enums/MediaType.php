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
    case ApplicationJson           = 'application/json';
    case ApplicationXml            = 'application/xml';
    case ApplicationPdf            = 'application/pdf';
    case ApplicationZip            = 'application/zip';
    case ApplicationGzip           = 'application/gzip';
    case ApplicationOctetStream    = 'application/octet-stream';
    case ApplicationFormUrlencoded = 'application/x-www-form-urlencoded';
    case ApplicationJavascript     = 'application/javascript';
    case ApplicationLdJson         = 'application/ld+json';
    case ApplicationSql            = 'application/sql';
    case ApplicationGraphql        = 'application/graphql';
    case ApplicationYaml           = 'application/yaml';
    case ApplicationMsgpack        = 'application/msgpack';

    /*
    |---------------------------------------------------------------------------
    | Text types
    |---------------------------------------------------------------------------
    */
    case TextPlain      = 'text/plain';
    case TextHtml       = 'text/html';
    case TextCss        = 'text/css';
    case TextCsv        = 'text/csv';
    case TextXml        = 'text/xml';
    case TextMarkdown   = 'text/markdown';
    case TextCalendar   = 'text/calendar';
    case TextJavascript = 'text/javascript';

    /*
    |---------------------------------------------------------------------------
    | Multipart types
    |---------------------------------------------------------------------------
    */
    case MultipartFormData   = 'multipart/form-data';
    case MultipartByteRanges = 'multipart/byteranges';
    case MultipartMixed      = 'multipart/mixed';

    /*
    |---------------------------------------------------------------------------
    | Image types
    |---------------------------------------------------------------------------
    */
    case ImagePng    = 'image/png';
    case ImageJpeg   = 'image/jpeg';
    case ImageGif    = 'image/gif';
    case ImageWebp   = 'image/webp';
    case ImageSvgXml = 'image/svg+xml';
    case ImageAvif   = 'image/avif';
    case ImageIco    = 'image/x-icon';

    /*
    |---------------------------------------------------------------------------
    | Audio types
    |---------------------------------------------------------------------------
    */
    case AudioMpeg = 'audio/mpeg';
    case AudioOgg  = 'audio/ogg';
    case AudioWav  = 'audio/wav';
    case AudioWebm = 'audio/webm';

    /*
    |---------------------------------------------------------------------------
    | Video types
    |---------------------------------------------------------------------------
    */
    case VideoMp4  = 'video/mp4';
    case VideoWebm = 'video/webm';
    case VideoOgg  = 'video/ogg';

    /*
    |---------------------------------------------------------------------------
    | Font types
    |---------------------------------------------------------------------------
    */
    case FontWoff  = 'font/woff';
    case FontWoff2 = 'font/woff2';
    case FontTtf   = 'font/ttf';
    case FontOtf   = 'font/otf';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

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
     * Get the common file extension for this media type.
     *
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return match ($this) {
            self::ApplicationJson           => 'json',
            self::ApplicationXml            => 'xml',
            self::ApplicationPdf            => 'pdf',
            self::ApplicationZip            => 'zip',
            self::ApplicationGzip           => 'gz',
            self::ApplicationOctetStream    => 'bin',
            self::ApplicationFormUrlencoded => null,
            self::ApplicationJavascript     => 'js',
            self::ApplicationLdJson         => 'jsonld',
            self::ApplicationSql            => 'sql',
            self::ApplicationGraphql        => 'graphql',
            self::ApplicationYaml           => 'yaml',
            self::ApplicationMsgpack        => 'msgpack',
            self::TextPlain                 => 'txt',
            self::TextHtml                  => 'html',
            self::TextCss                   => 'css',
            self::TextCsv                   => 'csv',
            self::TextXml                   => 'xml',
            self::TextMarkdown              => 'md',
            self::TextCalendar              => 'ics',
            self::TextJavascript            => 'js',
            self::MultipartFormData         => null,
            self::MultipartByteRanges       => null,
            self::MultipartMixed            => null,
            self::ImagePng                  => 'png',
            self::ImageJpeg                 => 'jpg',
            self::ImageGif                  => 'gif',
            self::ImageWebp                 => 'webp',
            self::ImageSvgXml               => 'svg',
            self::ImageAvif                 => 'avif',
            self::ImageIco                  => 'ico',
            self::AudioMpeg                 => 'mp3',
            self::AudioOgg                  => 'ogg',
            self::AudioWav                  => 'wav',
            self::AudioWebm                 => 'weba',
            self::VideoMp4                  => 'mp4',
            self::VideoWebm                 => 'webm',
            self::VideoOgg                  => 'ogv',
            self::FontWoff                  => 'woff',
            self::FontWoff2                 => 'woff2',
            self::FontTtf                   => 'ttf',
            self::FontOtf                   => 'otf',
        };
    }
}
