<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** Message explaining the authorization error. */
enum GetAccountAccountIdOrdersOrderId403ApplicationJSONMessage: string
{
    case YouDoNotHavePermissionToAccessThisResource = 'You do not have permission to access this resource';
    case AccountNotFound = 'Account not found';
}
