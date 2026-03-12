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
    case Accept            = 'Accept';
    case AcceptCharset     = 'Accept-Charset';
    case AcceptEncoding    = 'Accept-Encoding';
    case AcceptLanguage    = 'Accept-Language';
    case Authorization     = 'Authorization';
    case CacheControl      = 'Cache-Control';
    case Connection        = 'Connection';
    case ContentLength     = 'Content-Length';
    case ContentType       = 'Content-Type';
    case Cookie            = 'Cookie';
    case Expect            = 'Expect';
    case Forwarded         = 'Forwarded';
    case Host              = 'Host';
    case IfMatch           = 'If-Match';
    case IfModifiedSince   = 'If-Modified-Since';
    case IfNoneMatch       = 'If-None-Match';
    case IfRange           = 'If-Range';
    case IfUnmodifiedSince = 'If-Unmodified-Since';
    case Origin            = 'Origin';
    case Range             = 'Range';
    case Referer           = 'Referer';
    case Te                = 'TE';
    case UserAgent         = 'User-Agent';

    /*
    |---------------------------------------------------------------------------
    | Response headers
    |---------------------------------------------------------------------------
    */
    case AcceptRanges       = 'Accept-Ranges';
    case Age                = 'Age';
    case Allow              = 'Allow';
    case ContentDisposition = 'Content-Disposition';
    case ContentEncoding    = 'Content-Encoding';
    case ContentLanguage    = 'Content-Language';
    case ContentLocation    = 'Content-Location';
    case ContentRange       = 'Content-Range';
    case Date               = 'Date';
    case Etag               = 'ETag';
    case Expires            = 'Expires';
    case LastModified       = 'Last-Modified';
    case Link               = 'Link';
    case Location           = 'Location';
    case ProxyAuthenticate  = 'Proxy-Authenticate';
    case RetryAfter         = 'Retry-After';
    case Server             = 'Server';
    case SetCookie          = 'Set-Cookie';
    case Vary               = 'Vary';
    case WwwAuthenticate    = 'WWW-Authenticate';

    /*
    |---------------------------------------------------------------------------
    | Security headers
    |---------------------------------------------------------------------------
    */
    case AccessControlAllowCredentials = 'Access-Control-Allow-Credentials';
    case AccessControlAllowHeaders     = 'Access-Control-Allow-Headers';
    case AccessControlAllowMethods     = 'Access-Control-Allow-Methods';
    case AccessControlAllowOrigin      = 'Access-Control-Allow-Origin';
    case AccessControlExposeHeaders    = 'Access-Control-Expose-Headers';
    case AccessControlMaxAge           = 'Access-Control-Max-Age';
    case AccessControlRequestHeaders   = 'Access-Control-Request-Headers';
    case AccessControlRequestMethod    = 'Access-Control-Request-Method';
    case StrictTransportSecurity       = 'Strict-Transport-Security';
    case ContentSecurityPolicy         = 'Content-Security-Policy';
    case XContentTypeOptions           = 'X-Content-Type-Options';
    case XFrameOptions                 = 'X-Frame-Options';

    /*
    |---------------------------------------------------------------------------
    | Non-standard (conventional) headers
    |---------------------------------------------------------------------------
    */
    case XRequestId      = 'X-Request-ID';
    case XForwardedFor   = 'X-Forwarded-For';
    case XForwardedHost  = 'X-Forwarded-Host';
    case XForwardedProto = 'X-Forwarded-Proto';
    case XCorrelationId  = 'X-Correlation-ID';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Check if the header is an IANA permanent standard.
     *
     * @return bool
     */
    public function isStandard(): bool
    {
        return match ($this) {
            self::XRequestId,
            self::XForwardedFor,
            self::XForwardedHost,
            self::XForwardedProto,
            self::XCorrelationId,
            self::XContentTypeOptions,
            self::XFrameOptions => false,
            default             => true,
        };
    }
}
