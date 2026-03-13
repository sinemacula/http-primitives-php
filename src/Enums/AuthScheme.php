<?php

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of HTTP authentication schemes.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum AuthScheme: string
{
    case Basic  = 'Basic';
    case Bearer = 'Bearer';
    case Digest = 'Digest';
}
