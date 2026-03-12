<?php

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
    case Continue           = 100;
    case SwitchingProtocols = 101;
    case Processing         = 102;
    case EarlyHints         = 103;

    /*
    |---------------------------------------------------------------------------
    | Successful responses (2xx)
    |---------------------------------------------------------------------------
    */
    case Ok                          = 200;
    case Created                     = 201;
    case Accepted                    = 202;
    case NonAuthoritativeInformation = 203;
    case NoContent                   = 204;
    case ResetContent                = 205;
    case PartialContent              = 206;
    case MultiStatus                 = 207;
    case AlreadyReported             = 208;
    case ImUsed                      = 226;

    /*
    |---------------------------------------------------------------------------
    | Redirection messages (3xx)
    |---------------------------------------------------------------------------
    */
    case MultipleChoices  = 300;
    case MovedPermanently = 301;
    case Found            = 302;
    case SeeOther         = 303;
    case NotModified      = 304;

    /** @deprecated */
    case UseProxy = 305;

    /** @deprecated */
    case Unused = 306;

    case TemporaryRedirect = 307;
    case PermanentRedirect = 308;

    /*
    |---------------------------------------------------------------------------
    | Client error responses (4xx)
    |---------------------------------------------------------------------------
    */
    case BadRequest                  = 400;
    case Unauthorized                = 401;
    case PaymentRequired             = 402;
    case Forbidden                   = 403;
    case NotFound                    = 404;
    case MethodNotAllowed            = 405;
    case NotAcceptable               = 406;
    case ProxyAuthenticationRequired = 407;
    case RequestTimeout              = 408;
    case Conflict                    = 409;
    case Gone                        = 410;
    case LengthRequired              = 411;
    case PreconditionFailed          = 412;
    case ContentTooLarge             = 413;
    case UriTooLong                  = 414;
    case UnsupportedMediaType        = 415;
    case RangeNotSatisfiable         = 416;
    case ExpectationFailed           = 417;
    case ImATeapot                   = 418;
    case MisdirectedRequest          = 421;
    case UnprocessableContent        = 422;
    case Locked                      = 423;
    case FailedDependency            = 424;
    case TooEarly                    = 425;
    case UpgradeRequired             = 426;
    case PreconditionRequired        = 428;
    case TooManyRequests             = 429;
    case RequestHeaderFieldsTooLarge = 431;
    case UnavailableForLegalReasons  = 451;

    /*
    |---------------------------------------------------------------------------
    | Server error responses (5xx)
    |---------------------------------------------------------------------------
    */
    case InternalServerError     = 500;
    case NotImplemented          = 501;
    case BadGateway              = 502;
    case ServiceUnavailable      = 503;
    case GatewayTimeout          = 504;
    case HttpVersionNotSupported = 505;
    case VariantAlsoNegotiates   = 506;
    case InsufficientStorage     = 507;
    case LoopDetected            = 508;

    /** @deprecated */
    case NotExtended = 510;

    case NetworkAuthenticationRequired = 511;

    /*
    |---------------------------------------------------------------------------
    | Methods
    |---------------------------------------------------------------------------
    */

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
        return match ($this) {
            self::Continue                      => 'Continue',
            self::SwitchingProtocols            => 'Switching Protocols',
            self::Processing                    => 'Processing',
            self::EarlyHints                    => 'Early Hints',
            self::Ok                            => 'OK',
            self::Created                       => 'Created',
            self::Accepted                      => 'Accepted',
            self::NonAuthoritativeInformation   => 'Non-Authoritative Information',
            self::NoContent                     => 'No Content',
            self::ResetContent                  => 'Reset Content',
            self::PartialContent                => 'Partial Content',
            self::MultiStatus                   => 'Multi-Status',
            self::AlreadyReported               => 'Already Reported',
            self::ImUsed                        => 'IM Used',
            self::MultipleChoices               => 'Multiple Choices',
            self::MovedPermanently              => 'Moved Permanently',
            self::Found                         => 'Found',
            self::SeeOther                      => 'See Other',
            self::NotModified                   => 'Not Modified',
            self::UseProxy                      => 'Use Proxy',
            self::Unused                        => 'unused',
            self::TemporaryRedirect             => 'Temporary Redirect',
            self::PermanentRedirect             => 'Permanent Redirect',
            self::BadRequest                    => 'Bad Request',
            self::Unauthorized                  => 'Unauthorized',
            self::PaymentRequired               => 'Payment Required',
            self::Forbidden                     => 'Forbidden',
            self::NotFound                      => 'Not Found',
            self::MethodNotAllowed              => 'Method Not Allowed',
            self::NotAcceptable                 => 'Not Acceptable',
            self::ProxyAuthenticationRequired   => 'Proxy Authentication Required',
            self::RequestTimeout                => 'Request Timeout',
            self::Conflict                      => 'Conflict',
            self::Gone                          => 'Gone',
            self::LengthRequired                => 'Length Required',
            self::PreconditionFailed            => 'Precondition Failed',
            self::ContentTooLarge               => 'Content Too Large',
            self::UriTooLong                    => 'URI Too Long',
            self::UnsupportedMediaType          => 'Unsupported Media Type',
            self::RangeNotSatisfiable           => 'Range Not Satisfiable',
            self::ExpectationFailed             => 'Expectation Failed',
            self::ImATeapot                     => 'I\'m a Teapot',
            self::MisdirectedRequest            => 'Misdirected Request',
            self::UnprocessableContent          => 'Unprocessable Content',
            self::Locked                        => 'Locked',
            self::FailedDependency              => 'Failed Dependency',
            self::TooEarly                      => 'Too Early',
            self::UpgradeRequired               => 'Upgrade Required',
            self::PreconditionRequired          => 'Precondition Required',
            self::TooManyRequests               => 'Too Many Requests',
            self::RequestHeaderFieldsTooLarge   => 'Request Header Fields Too Large',
            self::UnavailableForLegalReasons    => 'Unavailable For Legal Reasons',
            self::InternalServerError           => 'Internal Server Error',
            self::NotImplemented                => 'Not Implemented',
            self::BadGateway                    => 'Bad Gateway',
            self::ServiceUnavailable            => 'Service Unavailable',
            self::GatewayTimeout                => 'Gateway Timeout',
            self::HttpVersionNotSupported       => 'HTTP Version Not Supported',
            self::VariantAlsoNegotiates         => 'Variant Also Negotiates',
            self::InsufficientStorage           => 'Insufficient Storage',
            self::LoopDetected                  => 'Loop Detected',
            self::NotExtended                   => 'Not Extended',
            self::NetworkAuthenticationRequired => 'Network Authentication Required',
        };
    }
}
