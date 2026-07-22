<?php

declare(strict_types = 1);

namespace SineMacula\Http\Enums;

/**
 * Provide an enum of HTTP status codes.
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
enum HttpStatus: int
{
    /*
    |---------------------------------------------------------------------------
    | Informational responses (1xx)
    |---------------------------------------------------------------------------
    */
    case CONTINUE            = 100;
    case SWITCHING_PROTOCOLS = 101;
    case PROCESSING          = 102;
    case EARLY_HINTS         = 103;

    /*
    |---------------------------------------------------------------------------
    | Successful responses (2xx)
    |---------------------------------------------------------------------------
    */
    case OK                            = 200;
    case CREATED                       = 201;
    case ACCEPTED                      = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT                    = 204;
    case RESET_CONTENT                 = 205;
    case PARTIAL_CONTENT               = 206;
    case MULTI_STATUS                  = 207;
    case ALREADY_REPORTED              = 208;
    case IM_USED                       = 226;

    /*
    |---------------------------------------------------------------------------
    | Redirection messages (3xx)
    |---------------------------------------------------------------------------
    */
    case MULTIPLE_CHOICES   = 300;
    case MOVED_PERMANENTLY  = 301;
    case FOUND              = 302;
    case SEE_OTHER          = 303;
    case NOT_MODIFIED       = 304;
    case USE_PROXY          = 305;
    case UNUSED             = 306;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    /*
    |---------------------------------------------------------------------------
    | Client error responses (4xx)
    |---------------------------------------------------------------------------
    */
    case BAD_REQUEST                     = 400;
    case UNAUTHORIZED                    = 401;
    case PAYMENT_REQUIRED                = 402;
    case FORBIDDEN                       = 403;
    case NOT_FOUND                       = 404;
    case METHOD_NOT_ALLOWED              = 405;
    case NOT_ACCEPTABLE                  = 406;
    case PROXY_AUTHENTICATION_REQUIRED   = 407;
    case REQUEST_TIMEOUT                 = 408;
    case CONFLICT                        = 409;
    case GONE                            = 410;
    case LENGTH_REQUIRED                 = 411;
    case PRECONDITION_FAILED             = 412;
    case CONTENT_TOO_LARGE               = 413;
    case URI_TOO_LONG                    = 414;
    case UNSUPPORTED_MEDIA_TYPE          = 415;
    case RANGE_NOT_SATISFIABLE           = 416;
    case EXPECTATION_FAILED              = 417;
    case IM_A_TEAPOT                     = 418;
    case MISDIRECTED_REQUEST             = 421;
    case UNPROCESSABLE_CONTENT           = 422;
    case LOCKED                          = 423;
    case FAILED_DEPENDENCY               = 424;
    case TOO_EARLY                       = 425;
    case UPGRADE_REQUIRED                = 426;
    case PRECONDITION_REQUIRED           = 428;
    case TOO_MANY_REQUESTS               = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case UNAVAILABLE_FOR_LEGAL_REASONS   = 451;

    /*
    |---------------------------------------------------------------------------
    | Server error responses (5xx)
    |---------------------------------------------------------------------------
    */
    case INTERNAL_SERVER_ERROR           = 500;
    case NOT_IMPLEMENTED                 = 501;
    case BAD_GATEWAY                     = 502;
    case SERVICE_UNAVAILABLE             = 503;
    case GATEWAY_TIMEOUT                 = 504;
    case HTTP_VERSION_NOT_SUPPORTED      = 505;
    case VARIANT_ALSO_NEGOTIATES         = 506;
    case INSUFFICIENT_STORAGE            = 507;
    case LOOP_DETECTED                   = 508;
    case NOT_EXTENDED                    = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;

    /** @var array<string, string> The IANA/RFC 9110 reason phrases keyed by case name. */
    private const array REASON_PHRASES = [
        'CONTINUE'                        => 'Continue',
        'SWITCHING_PROTOCOLS'             => 'Switching Protocols',
        'PROCESSING'                      => 'Processing',
        'EARLY_HINTS'                     => 'Early Hints',
        'OK'                              => 'OK',
        'CREATED'                         => 'Created',
        'ACCEPTED'                        => 'Accepted',
        'NON_AUTHORITATIVE_INFORMATION'   => 'Non-Authoritative Information',
        'NO_CONTENT'                      => 'No Content',
        'RESET_CONTENT'                   => 'Reset Content',
        'PARTIAL_CONTENT'                 => 'Partial Content',
        'MULTI_STATUS'                    => 'Multi-Status',
        'ALREADY_REPORTED'                => 'Already Reported',
        'IM_USED'                         => 'IM Used',
        'MULTIPLE_CHOICES'                => 'Multiple Choices',
        'MOVED_PERMANENTLY'               => 'Moved Permanently',
        'FOUND'                           => 'Found',
        'SEE_OTHER'                       => 'See Other',
        'NOT_MODIFIED'                    => 'Not Modified',
        'USE_PROXY'                       => 'Use Proxy',
        'UNUSED'                          => 'unused',
        'TEMPORARY_REDIRECT'              => 'Temporary Redirect',
        'PERMANENT_REDIRECT'              => 'Permanent Redirect',
        'BAD_REQUEST'                     => 'Bad Request',
        'UNAUTHORIZED'                    => 'Unauthorized',
        'PAYMENT_REQUIRED'                => 'Payment Required',
        'FORBIDDEN'                       => 'Forbidden',
        'NOT_FOUND'                       => 'Not Found',
        'METHOD_NOT_ALLOWED'              => 'Method Not Allowed',
        'NOT_ACCEPTABLE'                  => 'Not Acceptable',
        'PROXY_AUTHENTICATION_REQUIRED'   => 'Proxy Authentication Required',
        'REQUEST_TIMEOUT'                 => 'Request Timeout',
        'CONFLICT'                        => 'Conflict',
        'GONE'                            => 'Gone',
        'LENGTH_REQUIRED'                 => 'Length Required',
        'PRECONDITION_FAILED'             => 'Precondition Failed',
        'CONTENT_TOO_LARGE'               => 'Content Too Large',
        'URI_TOO_LONG'                    => 'URI Too Long',
        'UNSUPPORTED_MEDIA_TYPE'          => 'Unsupported Media Type',
        'RANGE_NOT_SATISFIABLE'           => 'Range Not Satisfiable',
        'EXPECTATION_FAILED'              => 'Expectation Failed',
        'IM_A_TEAPOT'                     => 'I\'m a Teapot',
        'MISDIRECTED_REQUEST'             => 'Misdirected Request',
        'UNPROCESSABLE_CONTENT'           => 'Unprocessable Content',
        'LOCKED'                          => 'Locked',
        'FAILED_DEPENDENCY'               => 'Failed Dependency',
        'TOO_EARLY'                       => 'Too Early',
        'UPGRADE_REQUIRED'                => 'Upgrade Required',
        'PRECONDITION_REQUIRED'           => 'Precondition Required',
        'TOO_MANY_REQUESTS'               => 'Too Many Requests',
        'REQUEST_HEADER_FIELDS_TOO_LARGE' => 'Request Header Fields Too Large',
        'UNAVAILABLE_FOR_LEGAL_REASONS'   => 'Unavailable For Legal Reasons',
        'INTERNAL_SERVER_ERROR'           => 'Internal Server Error',
        'NOT_IMPLEMENTED'                 => 'Not Implemented',
        'BAD_GATEWAY'                     => 'Bad Gateway',
        'SERVICE_UNAVAILABLE'             => 'Service Unavailable',
        'GATEWAY_TIMEOUT'                 => 'Gateway Timeout',
        'HTTP_VERSION_NOT_SUPPORTED'      => 'HTTP Version Not Supported',
        'VARIANT_ALSO_NEGOTIATES'         => 'Variant Also Negotiates',
        'INSUFFICIENT_STORAGE'            => 'Insufficient Storage',
        'LOOP_DETECTED'                   => 'Loop Detected',
        'NOT_EXTENDED'                    => 'Not Extended',
        'NETWORK_AUTHENTICATION_REQUIRED' => 'Network Authentication Required',
    ];

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

    /**
     * Get the numeric status code.
     *
     * @return int
     */
    public function getCode(): int
    {
        return $this->value;
    }

    /**
     * Get the full status line (e.g. "404 Not Found").
     *
     * @return string
     */
    public function getStatusLine(): string
    {
        return $this->value . ' ' . $this->getReasonPhrase();
    }

    /**
     * Check if the status code is in the 1xx informational range.
     *
     * @return bool
     */
    public function isInformational(): bool
    {
        return $this->value >= 100 && $this->value < 200;
    }

    /**
     * Check if the status code is in the 2xx success range.
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->value >= 200 && $this->value < 300;
    }

    /**
     * Check if the status code is in the 3xx redirection range.
     *
     * @return bool
     */
    public function isRedirection(): bool
    {
        return $this->value >= 300 && $this->value < 400;
    }

    /**
     * Check if the status code is in the 4xx client error range.
     *
     * @return bool
     */
    public function isClientError(): bool
    {
        return $this->value >= 400 && $this->value < 500;
    }

    /**
     * Check if the status code is in the 5xx server error range.
     *
     * @return bool
     */
    public function isServerError(): bool
    {
        return $this->value >= 500 && $this->value < 600;
    }

    /**
     * Get the IANA/RFC 9110 reason phrase for the status code.
     *
     * @return string
     */
    public function getReasonPhrase(): string
    {
        return self::REASON_PHRASES[$this->name];
    }
}
