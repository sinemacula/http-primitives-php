<?php

declare(strict_types = 1);

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of common character sets.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum Charset: string
{
    case UTF_8        = 'utf-8';
    case ASCII        = 'us-ascii';
    case ISO_8859_1   = 'iso-8859-1';
    case ISO_8859_2   = 'iso-8859-2';
    case ISO_8859_9   = 'iso-8859-9';
    case ISO_8859_15  = 'iso-8859-15';
    case WINDOWS_1250 = 'windows-1250';
    case WINDOWS_1251 = 'windows-1251';
    case WINDOWS_1252 = 'windows-1252';
    case WINDOWS_1256 = 'windows-1256';
    case UTF_16       = 'utf-16';
    case UTF_16_BE    = 'utf-16be';
    case UTF_16_LE    = 'utf-16le';
    case UTF_32       = 'utf-32';
    case SHIFT_JIS    = 'shift_jis';
    case EUC_JP       = 'euc-jp';
    case EUC_KR       = 'euc-kr';
    case GB_2312      = 'gb2312';
    case BIG_5        = 'big5';
    case KOI8_R       = 'koi8-r';

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Get the encoding name string.
     *
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->value;
    }
}
