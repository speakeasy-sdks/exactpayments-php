<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/** The brand name of the credit card. It must be in lowercase. */
enum CardDetailsSchemaBrand: string
{
    case Visa = 'visa';
    case Mastercard = 'mastercard';
    case Amex = 'amex';
    case Discover = 'discover';
    case Diners = 'diners';
    case Jcb = 'jcb';
    case UnionPay = 'union pay';
}
