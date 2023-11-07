<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** Code of the authorization error. */
enum PostPaymentCode: string
{
    case OrderForbiddenError = 'order-forbidden-error';
    case PaymentsForbiddenError = 'payments-forbidden-error';
}
