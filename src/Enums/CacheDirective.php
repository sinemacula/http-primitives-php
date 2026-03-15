<?php

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of HTTP cache directives.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum CacheDirective: string
{
    case MAX_AGE                = 'max-age';
    case MAX_STALE              = 'max-stale';
    case MIN_FRESH              = 'min-fresh';
    case MUST_REVALIDATE        = 'must-revalidate';
    case MUST_UNDERSTAND        = 'must-understand';
    case NO_CACHE               = 'no-cache';
    case NO_STORE               = 'no-store';
    case NO_TRANSFORM           = 'no-transform';
    case ONLY_IF_CACHED         = 'only-if-cached';
    case PRIVATE                = 'private';
    case PROXY_REVALIDATE       = 'proxy-revalidate';
    case PUBLIC                 = 'public';
    case S_MAXAGE               = 's-maxage';
    case STALE_IF_ERROR         = 'stale-if-error';
    case STALE_WHILE_REVALIDATE = 'stale-while-revalidate';
    case IMMUTABLE              = 'immutable';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Check if the directive is applicable to requests.
     *
     * @return bool
     */
    public function isRequestDirective(): bool
    {
        return match ($this) {
            self::MAX_AGE,
            self::MAX_STALE,
            self::MIN_FRESH,
            self::NO_CACHE,
            self::NO_STORE,
            self::NO_TRANSFORM,
            self::ONLY_IF_CACHED,
            self::STALE_IF_ERROR => true,
            default              => false,
        };
    }

    /**
     * Check if the directive is applicable to responses.
     *
     * @return bool
     */
    public function isResponseDirective(): bool
    {
        return match ($this) {
            self::MAX_AGE,
            self::MUST_REVALIDATE,
            self::MUST_UNDERSTAND,
            self::NO_CACHE,
            self::NO_STORE,
            self::NO_TRANSFORM,
            self::PRIVATE,
            self::PROXY_REVALIDATE,
            self::PUBLIC,
            self::S_MAXAGE,
            self::STALE_IF_ERROR,
            self::STALE_WHILE_REVALIDATE,
            self::IMMUTABLE => true,
            default         => false,
        };
    }
}
