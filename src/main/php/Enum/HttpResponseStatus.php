<?php

/*
 * Copyright (c) 2016 - 2020 Itspire.
 * This software is licensed under the BSD-3-Clause license. (see LICENSE.md for full license)
 * All Right Reserved.
 */

declare(strict_types=1);

namespace Itspire\Http\Common\Enum;

use Itspire\Common\Enum\AbstractEnum;

class HttpResponseStatus extends AbstractEnum
{
    // 1XX Informational
    public const HTTP_CONTINUE = [100, 'Continue'];
    public const HTTP_SWITCHING_PROTOCOLS = [101, 'Switching Protocols'];
    public const HTTP_PROCESSING = [102, 'Processing']; // RFC2518

    // 2XX Success
    public const HTTP_OK = [200, 'OK'];
    public const HTTP_CREATED = [201, 'Created'];
    public const HTTP_ACCEPTED = [202, 'Accepted'];
    public const HTTP_NON_AUTHORITATIVE_INFORMATION = [203, 'Non-Authoritative Information'];
    public const HTTP_NO_CONTENT = [204, 'No Content'];
    public const HTTP_RESET_CONTENT = [205, 'Reset Content'];
    public const HTTP_PARTIAL_CONTENT = [206, 'Partial Content'];
    public const HTTP_MULTI_STATUS = [207, 'Multi-status']; // RFC4918
    public const HTTP_ALREADY_REPORTED = [208, 'Already reported']; // RFC5842
    public const HTTP_IM_USED = [226, 'IM Used']; // RFC3229

    // 3XX Redirection
    public const HTTP_MULTIPLE_CHOICES = [300, 'Multiple Choices'];
    public const HTTP_MOVED_PERMANENTLY = [301, 'Moved Permanently'];
    public const HTTP_FOUND = [302, 'Found'];
    public const HTTP_SEE_OTHER = [303, 'See Other'];
    public const HTTP_NOT_MODIFIED = [304, 'Not Modified'];
    public const HTTP_USE_PROXY = [305, 'Use Proxy'];
    public const HTTP_SWITCH_PROXY = [306, 'Switch Proxy']; // Not used anymore but still reserved
    public const HTTP_TEMPORARY_REDIRECT = [307, 'Temporary Redirect'];
    public const HTTP_PERMANENT_REDIRECT = [308, 'Permanent Redirect']; // RFC 7538

    // 4XX Client Errors
    public const HTTP_BAD_REQUEST = [400, 'Bad Request'];
    public const HTTP_UNAUTHORIZED = [401, 'Unauthorized'];
    public const HTTP_PAYMENT_REQUIRED = [402, 'Payment Required'];
    public const HTTP_FORBIDDEN = [403, 'Forbidden'];
    public const HTTP_NOT_FOUND = [404, 'Not Found'];
    public const HTTP_METHOD_NOT_ALLOWED = [405, 'Method Not Allowed'];
    public const HTTP_NOT_ACCEPTABLE = [406, 'Not Acceptable'];
    public const HTTP_PROXY_AUTHENTICATION_REQUIRED = [407, 'Proxy Authentication Required'];
    public const HTTP_REQUEST_TIMEOUT = [408, 'Request Timeout'];
    public const HTTP_CONFLICT = [409, 'Conflict'];
    public const HTTP_GONE = [410, 'Gone'];
    public const HTTP_LENGTH_REQUIRED = [411, 'Length Required'];
    public const HTTP_PRECONDITION_FAILED = [412, 'Precondition Failed'];
    public const HTTP_REQUEST_ENTITY_TOO_LARGE = [413, 'Request Entity Too Large'];
    public const HTTP_REQUEST_URI_TOO_LONG = [414, 'Request-URI Too Large'];
    public const HTTP_UNSUPPORTED_MEDIA_TYPE = [415, 'Unsupported Media Type'];
    public const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = [416, 'Requested range not satisfiable'];
    public const HTTP_EXPECTATION_FAILED = [417, 'Expectation Failed'];
    public const HTTP_I_AM_A_TEAPOT = [418, 'I\'m a teapot']; // RFC2324
    public const HTTP_MISDIRECTED_REQUEST = [421, 'Misdirected Request']; // RFC7540
    public const HTTP_NON_PROCESSABLE_ENTITY = [422, 'Unprocessable Entity']; // RFC4918
    public const HTTP_LOCKED = [423, 'Locked']; // RFC4918
    public const HTTP_FAILED_DEPENDENCY = [424, 'Failed Dependency']; // RFC4918
    public const HTTP_UNORDERED_COLLECTION = [425, 'Unordered Collection']; // RFC3648
    public const HTTP_UPGRADE_REQUIRED = [426, 'Upgrade Required']; // RFC2817
    public const HTTP_PRECONDITION_REQUIRED = [428, 'Precondition Required']; // RFC6585
    public const HTTP_TOO_MANY_REQUESTS = [429, 'Too Many Requests']; // RFC6585
    public const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = [431, 'Request Header Fields Too Large']; // RFC6585
    public const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = [431, 'Unavailable For Legal Reasons']; // RFC7725

    // 5XX Server Errors
    public const HTTP_INTERNAL_SERVER_ERROR = [500, 'Internal Server Error'];
    public const HTTP_NOT_IMPLEMENTED = [501, 'Not Implemented'];
    public const HTTP_BAD_GATEWAY = [502, 'Bad Gateway'];
    public const HTTP_SERVICE_UNAVAILABLE = [503, 'Service Unavailable'];
    public const HTTP_GATEWAY_TIMEOUT = [504, 'Gateway Timeout'];
    public const HTTP_VERSION_NOT_SUPPORTED = [505, 'HTTP Version not supported'];
    public const HTTP_VARIANT_ALSO_NEGOTIATES = [506, 'Variant Also Negotiates']; // RFC2295
    public const HTTP_INSUFFICIENT_STORAGE = [507, 'Insufficient Storage']; // RFC4918
    public const HTTP_LOOP_DETECTED = [508, 'Loop Detected']; // RFC5842
    public const HTTP_NOT_EXTENDED = [510, 'Not Extended']; // RFC2774
    public const HTTP_NETWORK_AUTHENTICATION_REQUIRED = [511, 'Network Authentication Required']; // RFC6585
}
