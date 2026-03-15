<?php

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of common HTTP headers.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum HttpHeader: string
{
    /*
    |---------------------------------------------------------------------------
    | Request headers
    |---------------------------------------------------------------------------
    */
    case ACCEPT              = 'Accept';
    case ACCEPT_CHARSET      = 'Accept-Charset';
    case ACCEPT_ENCODING     = 'Accept-Encoding';
    case ACCEPT_LANGUAGE     = 'Accept-Language';
    case AUTHORIZATION       = 'Authorization';
    case CACHE_CONTROL       = 'Cache-Control';
    case CONNECTION          = 'Connection';
    case CONTENT_LENGTH      = 'Content-Length';
    case CONTENT_TYPE        = 'Content-Type';
    case COOKIE              = 'Cookie';
    case EXPECT              = 'Expect';
    case FORWARDED           = 'Forwarded';
    case HOST                = 'Host';
    case IF_MATCH            = 'If-Match';
    case IF_MODIFIED_SINCE   = 'If-Modified-Since';
    case IF_NONE_MATCH       = 'If-None-Match';
    case IF_RANGE            = 'If-Range';
    case IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';
    case ORIGIN              = 'Origin';
    case RANGE               = 'Range';
    case REFERER             = 'Referer';
    case TE                  = 'TE';
    case USER_AGENT          = 'User-Agent';

    /*
    |---------------------------------------------------------------------------
    | Response headers
    |---------------------------------------------------------------------------
    */
    case ACCEPT_RANGES       = 'Accept-Ranges';
    case AGE                 = 'Age';
    case ALLOW               = 'Allow';
    case CONTENT_DISPOSITION = 'Content-Disposition';
    case CONTENT_ENCODING    = 'Content-Encoding';
    case CONTENT_LANGUAGE    = 'Content-Language';
    case CONTENT_LOCATION    = 'Content-Location';
    case CONTENT_RANGE       = 'Content-Range';
    case DATE                = 'Date';
    case ETAG                = 'ETag';
    case EXPIRES             = 'Expires';
    case LAST_MODIFIED       = 'Last-Modified';
    case LINK                = 'Link';
    case LOCATION            = 'Location';
    case PROXY_AUTHENTICATE  = 'Proxy-Authenticate';
    case RETRY_AFTER         = 'Retry-After';
    case SERVER              = 'Server';
    case SET_COOKIE          = 'Set-Cookie';
    case VARY                = 'Vary';
    case WWW_AUTHENTICATE    = 'WWW-Authenticate';

    /*
    |---------------------------------------------------------------------------
    | Security headers
    |---------------------------------------------------------------------------
    */
    case ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';
    case ACCESS_CONTROL_ALLOW_HEADERS     = 'Access-Control-Allow-Headers';
    case ACCESS_CONTROL_ALLOW_METHODS     = 'Access-Control-Allow-Methods';
    case ACCESS_CONTROL_ALLOW_ORIGIN      = 'Access-Control-Allow-Origin';
    case ACCESS_CONTROL_EXPOSE_HEADERS    = 'Access-Control-Expose-Headers';
    case ACCESS_CONTROL_MAX_AGE           = 'Access-Control-Max-Age';
    case ACCESS_CONTROL_REQUEST_HEADERS   = 'Access-Control-Request-Headers';
    case ACCESS_CONTROL_REQUEST_METHOD    = 'Access-Control-Request-Method';
    case STRICT_TRANSPORT_SECURITY        = 'Strict-Transport-Security';
    case CONTENT_SECURITY_POLICY          = 'Content-Security-Policy';
    case X_CONTENT_TYPE_OPTIONS           = 'X-Content-Type-Options';
    case X_FRAME_OPTIONS                  = 'X-Frame-Options';

    /*
    |---------------------------------------------------------------------------
    | Non-standard (conventional) headers
    |---------------------------------------------------------------------------
    */
    case X_REQUEST_ID      = 'X-Request-ID';
    case X_FORWARDED_FOR   = 'X-Forwarded-For';
    case X_FORWARDED_HOST  = 'X-Forwarded-Host';
    case X_FORWARDED_PROTO = 'X-Forwarded-Proto';
    case X_CORRELATION_ID  = 'X-Correlation-ID';
    case X_ACCEL_BUFFERING = 'X-Accel-Buffering';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Get the header name string.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->value;
    }

    /**
     * Check if the header is an IANA permanent standard.
     *
     * @return bool
     */
    public function isStandard(): bool
    {
        return match ($this) {
            self::X_REQUEST_ID,
            self::X_FORWARDED_FOR,
            self::X_FORWARDED_HOST,
            self::X_FORWARDED_PROTO,
            self::X_CORRELATION_ID,
            self::X_ACCEL_BUFFERING,
            self::X_CONTENT_TYPE_OPTIONS => false,
            default                      => true,
        };
    }
}
