<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** The response code from any AVS check. */
enum CardDetailsSchemaChecksAddressCheck: string
{
    case NoMatch = 'no-match';
    case NotVerified = 'not-verified';
    case PartialMatch = 'partial-match';
    case FullMatch = 'full-match';
}
