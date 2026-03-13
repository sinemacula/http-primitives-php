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
    case MaxAge               = 'max-age';
    case MaxStale             = 'max-stale';
    case MinFresh             = 'min-fresh';
    case MustRevalidate       = 'must-revalidate';
    case MustUnderstand       = 'must-understand';
    case NoCache              = 'no-cache';
    case NoStore              = 'no-store';
    case NoTransform          = 'no-transform';
    case OnlyIfCached         = 'only-if-cached';
    case Private              = 'private';
    case ProxyRevalidate      = 'proxy-revalidate';
    case Public               = 'public';
    case SMaxage              = 's-maxage';
    case StaleIfError         = 'stale-if-error';
    case StaleWhileRevalidate = 'stale-while-revalidate';
    case Immutable            = 'immutable';

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
            self::MaxAge,
            self::MaxStale,
            self::MinFresh,
            self::NoCache,
            self::NoStore,
            self::NoTransform,
            self::OnlyIfCached,
            self::StaleIfError => true,
            default            => false,
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
            self::MaxAge,
            self::MustRevalidate,
            self::MustUnderstand,
            self::NoCache,
            self::NoStore,
            self::NoTransform,
            self::Private,
            self::ProxyRevalidate,
            self::Public,
            self::SMaxage,
            self::StaleIfError,
            self::StaleWhileRevalidate,
            self::Immutable => true,
            default         => false,
        };
    }
}
