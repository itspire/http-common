<?php

/**
 * Copyright (c) 2016 - 2019 Itspire.
 * This software is licensed under the BSD-3-Clause license. (see LICENSE.md for full license)
 * All Right Reserved.
 */

declare(strict_types=1);

namespace Itspire\Http\Common\Enumeration;

use Itspire\Common\Enumeration\AbstractEnumeration;

class HttpMethod extends AbstractEnumeration
{
    /** @var string GET */
    public const GET = 'GET';

    /** @var string POST */
    public const POST = 'POST';

    /** @var string PUT */
    public const PUT = 'PUT';

    /** @var string PATCH */
    public const PATCH = 'PATCH';

    /** @var string DELETE */
    public const DELETE = 'DELETE';

    /** @var string HEAD */
    public const HEAD = 'HEAD';

    /** @var string OPTIONS */
    public const OPTIONS = 'OPTIONS';

    /** @var string CONNECT */
    public const CONNECT = 'CONNECT';
}
