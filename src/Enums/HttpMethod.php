<?php

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of HTTP methods.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum HttpMethod: string
{
    case Get     = 'GET';
    case Head    = 'HEAD';
    case Post    = 'POST';
    case Put     = 'PUT';
    case Patch   = 'PATCH';
    case Delete  = 'DELETE';
    case Connect = 'CONNECT';
    case Options = 'OPTIONS';
    case Trace   = 'TRACE';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Check if the method is safe per RFC 9110.
     *
     * @return bool
     */
    public function isSafe(): bool
    {
        return match ($this) {
            self::Get, self::Head, self::Options, self::Trace => true,
            default => false,
        };
    }

    /**
     * Check if the method is idempotent per RFC 9110.
     *
     * @return bool
     */
    public function isIdempotent(): bool
    {
        return match ($this) {
            self::Get, self::Head, self::Put, self::Delete, self::Options, self::Trace => true,
            default => false,
        };
    }
}
