<?php

declare(strict_types=1);

/*
 * PQAPIV2Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PQAPIV2Lib\Models;

/**
 * In combination with the <i>Disposition</i> type, the <i>Result</i> type provides the results of an
 * IDV check. A <i>Dispositioned</i> result of <i>FINAL PASS</i> represents a passing check, whereas a
 * <i>TRANSIENT FAIL</i> is still being processed but has failed at least one phase of the check. Until
 * the disposition is <i>FINAL</i>, a result has not been determined.
 */
class IdentityVerificationResultTypesEnum
{
    public const PASS = 'PASS';

    public const FAIL = 'FAIL';

    public const SERVICE_OFFLINE = 'SERVICE_OFFLINE';

    public const PROCESSING = 'PROCESSING';
}
