<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/** Type of the token. */
enum AccountCapturePayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType: string
{
    case Exactpay = 'exactpay';
    case Processor = 'processor';
}
