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
    case GET     = 'GET';
    case HEAD    = 'HEAD';
    case POST    = 'POST';
    case PUT     = 'PUT';
    case PATCH   = 'PATCH';
    case DELETE  = 'DELETE';
    case CONNECT = 'CONNECT';
    case OPTIONS = 'OPTIONS';
    case TRACE   = 'TRACE';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Get the HTTP verb string.
     *
     * @return string
     */
    public function getVerb(): string
    {
        return $this->value;
    }

    /**
     * Check if the method is safe per RFC 9110.
     *
     * @return bool
     */
    public function isSafe(): bool
    {
        return match ($this) {
            self::GET, self::HEAD, self::OPTIONS, self::TRACE => true,
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
            self::GET, self::HEAD, self::PUT, self::DELETE, self::OPTIONS, self::TRACE => true,
            default => false,
        };
    }
}
