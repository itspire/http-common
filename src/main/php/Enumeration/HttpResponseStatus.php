<?php

/**
 * Copyright (c) 2016 - 2019 Itspire.
 * This software is licensed under the BSD-3-Clause license. (see LICENSE.md for full license)
 * All Right Reserved.
 */

declare(strict_types=1);

namespace Itspire\Http\Common\Enumeration;

use Itspire\Common\Enumeration\AbstractEnumeration;

class HttpResponseStatus extends AbstractEnumeration
{
    /** @var array HTTP_CONTINUE */
    public const HTTP_CONTINUE = [100, 'Continue'];

    /** @var array HTTP_SWITCHING_PROTOCOLS */
    public const HTTP_SWITCHING_PROTOCOLS = [101, 'Switching Protocols'];

    /** @var array HTTP_PROCESSING */
    public const HTTP_PROCESSING = [102, 'Processing']; // RFC2518

    /** @var array HTTP_OK */
    public const HTTP_OK = [200, 'OK'];

    /** @var array HTTP_CREATED */
    public const HTTP_CREATED = [201, 'Created'];

    /** @var array HTTP_ACCEPTED */
    public const HTTP_ACCEPTED = [202, 'Accepted'];

    /** @var array HTTP_NON_AUTHORITATIVE_INFORMATION */
    public const HTTP_NON_AUTHORITATIVE_INFORMATION = [203, 'Non-Authoritative Information'];

    /** @var array HTTP_NO_CONTENT */
    public const HTTP_NO_CONTENT = [204, 'No Content'];

    /** @var array HTTP_RESET_CONTENT */
    public const HTTP_RESET_CONTENT = [205, 'Reset Content'];

    /** @var array HTTP_PARTIAL_CONTENT */
    public const HTTP_PARTIAL_CONTENT = [206, 'Partial Content'];

    /** @var array HTTP_MULTI_STATUS */
    public const HTTP_MULTI_STATUS = [207, 'Multi-status']; // RFC4918

    /** @var array HTTP_ALREADY_REPORTED */
    public const HTTP_ALREADY_REPORTED = [208, 'Already reported']; // RFC5842

    /** @var array HTTP_IM_USED */
    public const HTTP_IM_USED = [226, 'IM Used']; // RFC3229

    /** @var array HTTP_MULTIPLE_CHOICES */
    public const HTTP_MULTIPLE_CHOICES = [300, 'Multiple Choices'];

    /** @var array HTTP_MOVED_PERMANENTLY */
    public const HTTP_MOVED_PERMANENTLY = [301, 'Moved Permanently'];

    /** @var array HTTP_FOUND */
    public const HTTP_FOUND = [302, 'Found'];

    /** @var array HTTP_SEE_OTHER */
    public const HTTP_SEE_OTHER = [303, 'See Other'];

    /** @var array HTTP_NOT_MODIFIED */
    public const HTTP_NOT_MODIFIED = [304, 'Not Modified'];

    /** @var array HTTP_USE_PROXY */
    public const HTTP_USE_PROXY = [305, 'Use Proxy'];

    /** @var array HTTP_SWITCH_PROXY */
    public const HTTP_SWITCH_PROXY = [306, 'Switch Proxy']; // Not used anymore but still reserved

    /** @var array HTTP_TEMPORARY_REDIRECT */
    public const HTTP_TEMPORARY_REDIRECT = [307, 'Temporary Redirect'];

    /** @var array HTTP_PERMANENT_REDIRECT */
    public const HTTP_PERMANENT_REDIRECT = [308, 'Permanent Redirect']; // RFC 7538

    /** @var array HTTP_BAD_REQUEST */
    public const HTTP_BAD_REQUEST = [400, 'Bad Request'];

    /** @var array HTTP_UNAUTHORIZED */
    public const HTTP_UNAUTHORIZED = [401, 'Unauthorized'];

    /** @var array HTTP_PAYMENT_REQUIRED */
    public const HTTP_PAYMENT_REQUIRED = [402, 'Payment Required'];

    /** @var array HTTP_FORBIDDEN */
    public const HTTP_FORBIDDEN = [403, 'Forbidden'];

    /** @var array HTTP_NOT_FOUND */
    public const HTTP_NOT_FOUND = [404, 'Not Found'];

    /** @var array HTTP_METHOD_NOT_ALLOWED */
    public const HTTP_METHOD_NOT_ALLOWED = [405, 'Method Not Allowed'];

    /** @var array HTTP_NOT_ACCEPTABLE */
    public const HTTP_NOT_ACCEPTABLE = [406, 'Not Acceptable'];

    /** @var array HTTP_PROXY_AUTHENTICATION_REQUIRED */
    public const HTTP_PROXY_AUTHENTICATION_REQUIRED = [407, 'Proxy Authentication Required'];

    /** @var array HTTP_REQUEST_TIMEOUT */
    public const HTTP_REQUEST_TIMEOUT = [408, 'Request Timeout'];

    /** @var array HTTP_CONFLICT */
    public const HTTP_CONFLICT = [409, 'Conflict'];

    /** @var array HTTP_GONE */
    public const HTTP_GONE = [410, 'Gone'];

    /** @var array HTTP_LENGTH_REQUIRED */
    public const HTTP_LENGTH_REQUIRED = [411, 'Length Required'];

    /** @var array HTTP_PRECONDITION_FAILED */
    public const HTTP_PRECONDITION_FAILED = [412, 'Precondition Failed'];

    /** @var array HTTP_REQUEST_ENTITY_TOO_LARGE */
    public const HTTP_REQUEST_ENTITY_TOO_LARGE = [413, 'Request Entity Too Large'];

    /** @var array HTTP_REQUEST_URI_TOO_LONG */
    public const HTTP_REQUEST_URI_TOO_LONG = [414, 'Request-URI Too Large'];

    /** @var array HTTP_UNSUPPORTED_MEDIA_TYPE */
    public const HTTP_UNSUPPORTED_MEDIA_TYPE = [415, 'Unsupported Media Type'];

    /** @var array HTTP_REQUESTED_RANGE_NOT_SATISFIABLE */
    public const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE = [416, 'Requested range not satisfiable'];

    /** @var array HTTP_EXPECTATION_FAILED */
    public const HTTP_EXPECTATION_FAILED = [417, 'Expectation Failed'];

    /** @var array HTTP_I_AM_A_TEAPOT */
    public const HTTP_I_AM_A_TEAPOT = [418, 'I\'m a teapot']; // RFC2324

    /** @var array HTTP_NON_PROCESSABLE_ENTITY */
    public const HTTP_NON_PROCESSABLE_ENTITY = [422, 'Unprocessable Entity']; // RFC4918

    /** @var array HTTP_LOCKED */
    public const HTTP_LOCKED = [423, 'Locked']; // RFC4918

    /** @var array HTTP_FAILED_DEPENDENCY */
    public const HTTP_FAILED_DEPENDENCY = [424, 'Failed Dependency']; // RFC4918

    /** @var array HTTP_UNORDERED_COLLECTION */
    public const HTTP_UNORDERED_COLLECTION = [425, 'Unordered Collection']; // RFC3648

    /** @var array HTTP_UPGRADE_REQUIRED */
    public const HTTP_UPGRADE_REQUIRED = [426, 'Upgrade Required']; // RFC2817

    /** @var array HTTP_PRECONDITION_REQUIRED */
    public const HTTP_PRECONDITION_REQUIRED = [428, 'Precondition Required']; // RFC6585

    /** @var array HTTP_TOO_MANY_REQUESTS */
    public const HTTP_TOO_MANY_REQUESTS = [429, 'Too Many Requests']; // RFC6585

    /** @var array HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE */
    public const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = [431, 'Request Header Fields Too Large']; // RFC6585

    /** @var array HTTP_INTERNAL_SERVER_ERROR */
    public const HTTP_INTERNAL_SERVER_ERROR = [500, 'Internal Server Error'];

    /** @var array HTTP_NOT_IMPLEMENTED */
    public const HTTP_NOT_IMPLEMENTED = [501, 'Not Implemented'];

    /** @var array HTTP_BAD_GATEWAY */
    public const HTTP_BAD_GATEWAY = [502, 'Bad Gateway'];

    /** @var array HTTP_SERVICE_UNAVAILABLE */
    public const HTTP_SERVICE_UNAVAILABLE = [503, 'Service Unavailable'];

    /** @var array HTTP_GATEWAY_TIMEOUT */
    public const HTTP_GATEWAY_TIMEOUT = [504, 'Gateway Timeout'];

    /** @var array HTTP_VERSION_NOT_SUPPORTED */
    public const HTTP_VERSION_NOT_SUPPORTED = [505, 'HTTP Version not supported'];

    /** @var array HTTP_VARIANT_ALSO_NEGOTIATES */
    public const HTTP_VARIANT_ALSO_NEGOTIATES = [506, 'Variant Also Negotiates']; // RFC2295

    /** @var array HTTP_INSUFFICIENT_STORAGE */
    public const HTTP_INSUFFICIENT_STORAGE = [507, 'Insufficient Storage']; // RFC4918

    /** @var array HTTP_LOOP_DETECTED */
    public const HTTP_LOOP_DETECTED = [508, 'Loop Detected']; // RFC5842

    /** @var array HTTP_NOT_EXTENDED */
    public const HTTP_NOT_EXTENDED = [510, 'Not Extended']; // RFC2774

    /** @var array HTTP_NETWORK_AUTHENTICATION_REQUIRED */
    public const HTTP_NETWORK_AUTHENTICATION_REQUIRED = [511, 'Network Authentication Required']; // RFC6585
}
